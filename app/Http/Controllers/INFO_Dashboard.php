<?php

namespace App\Http\Controllers;
use App\Models\Home_Reservation;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Contact;
use App\Models\Salon;
use App\Models\SalonServices;
use App\Models\HomeService;       
use App\Models\HomeServices_Services;       
use Illuminate\Http\Request;
use Carbon\Carbon;
class INFO_Dashboard extends Controller
{

    public function index()
    {

        $totalAllUser = User::count();
        $totalUser = User::where('role', 'User')->count();
        $totalAdmin = User::where('role', 'Admin')->count();
        $totalHomeService =HomeService ::count();
        $totalHomeService_services =HomeServices_Services ::count();
        $totalContact = Contact::count();
        $totalSalonas = Salon::count();
        $totalSalonas_Services = SalonServices::count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');

        $total_Salon_Reservation = Reservation::count();
        $today_Salon_Reservation = Reservation::whereDate('created_at', $todayDate)->count();
        $thisMonth_Salon_Reservation = Reservation::whereMonth('created_at', $thisMonth)->count();

        $total_Home_Reservation = Home_Reservation::count();
        $today_Home_Reservation = Home_Reservation::whereDate('created_at', $todayDate)->count();
        $thisMonth_Home_Reservation = Home_Reservation::whereMonth('created_at', $thisMonth)->count();

        // dd($totalAllUser);

        return view('admin.dashboard',
         ['totalUser' => $totalUser, 'totalAllUser' => $totalAllUser, 'totalAdmin' => $totalAdmin, 

           'totalHomeService' => $totalHomeService,
           'totalSalonas' => $totalSalonas,

         'totalHomeService_services' => $totalHomeService_services,
           'totalSalonas_Services' => $totalSalonas_Services,

         'totalContact' => $totalContact, 


         'total_Salon_Reservation' => $total_Salon_Reservation, 
         'today_Salon_Reservation' => $today_Salon_Reservation,
         'thisMonth_Salon_Reservation' => $thisMonth_Salon_Reservation, 


         'total_Home_Reservation' => $total_Home_Reservation,
          'today_Home_Reservation' => $today_Home_Reservation,
          'thisMonth_Home_Reservation' => $thisMonth_Home_Reservation
        
        ]);

    }
}
