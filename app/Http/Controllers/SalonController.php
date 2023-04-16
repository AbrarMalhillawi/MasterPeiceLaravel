<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //  to show salons in admin page
    public function index()
    { 
         $salons=Salon::all();
         
        //  return view('user.Salonat',compact('salons'));
         
        return view('admin.salons.index',compact('salons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/Salonimage',$image);
        var_dump($request->file('upload_file'));

        // insert user
        $Salon = new Salon();
        $Salon->name = $request->name;
        $Salon->email = $request->email;
        $Salon->work_hours = $request->work_hours;
        $Salon->desc = $request->desc;
        $Salon->phone = $request->phone;
        $Salon->image= $image;
        $Salon->save();
        return redirect('salon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function show(Salon $salon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon = Salon::find($id);
        return view('admin.salons.update',compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->name = $request->name;
        $salon->email = $request->email;
        $salon->phone = $request->phone;
        $salon->work_hours = $request->work_hours;
        $salon->desc = $request->desc;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/salonimage',$image);
            $salon->image = $image;
        }
       
        $salon->save();

        return redirect('salon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon = Salon::findorfail($id);
        $salon->delete(); 
        return redirect()->route('salon.index');
        // return view('admin.users.index',compact('users'));
    }
}
