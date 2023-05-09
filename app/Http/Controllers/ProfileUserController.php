<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Home_Reservation;
use App\Models\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
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
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $reservations = Reservation::where('User_Id', $id)->get();
    $Home_Reservation = Home_Reservation::where('User_Id', $id)->get();
    return view('user.userProfile', compact('reservations','Home_Reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            $user_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/userimage',$user_img);
            $user->User_Image = $user_img;
        }
        // $user->role = $request->role;
        $user->save();
        
        return redirect()->action('App\Http\Controllers\ProfileUserController@show', $id);

        // return redirect('userProfile');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
