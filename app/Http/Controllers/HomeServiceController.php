<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeservices=HomeService::all();
        return view('admin.HomeServices.index',compact('homeservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeservices.create');
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
        $request->file('image')->storeAs('public/homeserviceimage',$image);
        var_dump($request->file('upload_file'));

        // insert user
        $HomeServices = new HomeService();
        $HomeServices->name = $request->name;
        $HomeServices->email = $request->email;
        $HomeServices->work_hours = $request->work_hours;
        $HomeServices->desc = $request->desc;
        $HomeServices->phone = $request->phone;
        $HomeServices->image= $image;
        $HomeServices->save();
        return redirect('homeServices');
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
        $homeservice = HomeService::find($id);
        return view('admin.HomeServices.update',compact('homeservice'));
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
        $homeservice = HomeService::findOrFail($id);
        $homeservice->name = $request->name;
        $homeservice->email = $request->email;
        $homeservice->phone = $request->phone;
        $homeservice->work_hours = $request->work_hours;
        $homeservice->desc = $request->desc;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/homeserviceimage',$image);
            $homeservice->image = $image;
        }
       
        $homeservice->save();

        return redirect('homeServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $HomeService = HomeService::findorfail($id);
        $HomeService->delete(); 
        return redirect()->route('homeServices.index');
        // return view('admin.users.index',compact('users'));
    }
}
