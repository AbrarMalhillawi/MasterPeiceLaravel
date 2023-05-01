<?php

namespace App\Http\Controllers;

use App\Models\SalonServices;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserSalonBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = SalonServices::all();

        // return view('admin.Reservation.salonReservation.create',['services'=>$services]);
        return view('admin.Reservation.salonReservation.create',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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

        $data = SalonServices::findOrfail($request->Salon_Services_Id);
        $price = $data->ServicePrice;

// dd($request->services_id);
        $user = $request->user_id;
        // Reservation::create([

            // 'first_name' => $request->first_name,
            // 'last_name' => $request->last_name,
            // 'phoneNumber' => $request->phoneNumber,
            // 'email' => $request->email,
            // 'user_id' => $user,
            // 'Salon_Services_Id' => $request->Salon_Services_Id,
            // 'status' => 'Pending',
            // 'comment' => $request->comment,
            // 'res_date' => $request->res_date,
            // 'price' => $price,

        // ]);


        $reservation=new Reservation();
        $reservation->first_name=$request->first_name;
        $reservation->last_name=$request->last_name;
        $reservation->phoneNumber=$request->phoneNumber;
        $reservation->email=$request->email;
        $reservation->User_Id=$user;
        $reservation->Salon_Services_Id=$request->Salon_Services_Id;
        $reservation->status='Pending';
        $reservation->comment=$request->comment;
        $reservation->res_date=$request->res_date;
        $reservation->price=$price;
        $reservation->save();



        return redirect()->route('SalonReservation.index')->with('success', 'Reservation Successful,thank you for booking.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
