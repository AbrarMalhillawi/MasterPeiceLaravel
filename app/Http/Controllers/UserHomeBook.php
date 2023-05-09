<?php

namespace App\Http\Controllers;

use App\Models\HomeServices_Services;
use App\Models\Home_Reservation;
use App\Models\HomeService;
use App\Models\Discount;
use Illuminate\Http\Request;

class UserHomeBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = HomeServices_Services::all();

        // return view('admin.Reservation.salonReservation.create',['services'=>$services]);
        return view('user.HomeBook',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
      // //////////////////

      public function sale($ServicePrice,$code)
      {
        
          $discount = Discount::where('code', $code)->first();
      
          if ($discount) {
              $discounted_price = $ServicePrice - ($ServicePrice * ($discount->discount_percentage / 100));
          } else {
              $discounted_price = $ServicePrice;
          }
      return $discounted_price;
      }
              // //////////////////
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10', 'min:10'],
            'res_date' => ['required'],
        ]);

        
    
        $code=$request->code;
        $data = HomeServices_Services::findOrfail($request->Home_Services_Id);
        $price = $this->sale($data->ServicePrice,$code);

// dd($request->services_id);
        $user = $request->user_id;
        $reservation=new Home_Reservation();
        $reservation->first_name=$request->first_name;
        $reservation->last_name=$request->last_name;
        $reservation->phoneNumber=$request->phoneNumber;
        $reservation->email=$request->email;
        $reservation->User_Id=$user;
        $reservation->Home_Services_Id=$request->Home_Services_Id;
        $reservation->status='Pending';
        $reservation->code=$request->code;
        $reservation->comment=$request->comment;
        $reservation->res_date=$request->res_date;
        $reservation->HomeServicesName=$request->HomeServicesName;
        $reservation->price=$price;
        $reservation->save();
        return redirect('HomeUser')->with('success', 'Reservation Successful,thank you for booking.');
        // return redirect()->route('/SalonUser')->with('success', 'Reservation Successful,thank you for booking.');][]
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $HomeService = HomeService::find($id);
        $services = HomeServices_Services::all();
        // dd($salon);
        return view('user.HomeBook',compact('HomeService','services'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
