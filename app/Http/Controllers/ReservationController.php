<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

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
                'SalonName' => $reservation->SalonName,
                // 'service_name' => isset($reservation->service) ? $reservation->service->name : "",
                'Salon_Services_Id' => isset($reservation->service) ? $reservation->service->id : "",


            ];
        }
        return view('admin.Reservation.salonReservation.index',compact('reservations'));
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = Reservation::findOrfail($id);
        // return view('Admin.pages.admin.reservationTable.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Reservation::findOrfail($id);

        $data->status = $request->status;

        $data->save();
        //-------------------------------
        // return view('admin.Reservation.homeReservation.index',compact('reservations'));
        
        return redirect('SalonReservation');
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
