<?php

namespace App\Http\Controllers;

use App\Models\Home_Reservation;
use Illuminate\Http\Request;

class HomeReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Home_Reservation::all();

        $data = [];
        
        foreach ($reservations as $reservation) {
            $data[] = [
                'first_name' => $reservation->first_name,
                'last_name' => $reservation->last_name,
                'email' => $reservation->email,
                'phoneNumber' => $reservation->phoneNumber,
                'comment' => $reservation->comment,
                'res_date' => $reservation->res_date,
                'status' => $reservation->status,
                'HomeServicesName' => $reservation->HomeServicesName,
                // 'service_name' => isset($reservation->service) ? $reservation->service->name : "",
                'Home_Services_Id' => isset($reservation->service) ? $reservation->service->id : "",


            ];
        }
        return view('admin.Reservation.homeReservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home_Reservation  $home_Reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Home_Reservation $home_Reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home_Reservation  $home_Reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Home_Reservation $home_Reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home_Reservation  $home_Reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Home_Reservation::findOrfail($id);

        $data->status = $request->status;

        $data->save();
        //-------------------------------
        // return view('admin.Reservation.homeReservation.index',compact('reservations'));
        
        return redirect('/HomeServicesReservation');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home_Reservation  $home_Reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home_Reservation $home_Reservation)
    {
        //
    }
}
