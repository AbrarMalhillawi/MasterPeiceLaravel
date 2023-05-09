<?php

namespace App\Http\Controllers;

use App\Models\HomeServices_Services;
use Illuminate\Http\Request;

class HomeServicesServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HomeServices = HomeServices_Services::all();
        return view('admin.Services.HomeServices.index' , compact('HomeServices'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.Services.HomeServices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $HomeServices_img = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/images',$HomeServices_img);
        // var_dump($request->file('upload_file'));

        // insert user
        $HomeService = new HomeServices_Services();
        $HomeService->HomeServicesId= $request->HomeServices_id;
        $HomeService->ServiceName = $request->Service_name;
        $HomeService->ServiceDescription = $request->Service_description;
        $HomeService->ServicePrice = $request->Service_price;
        $HomeService->ServiceTime = $request->Service_time;
        // $HomeService->ServiceImage= $HomeServices_img;
        $HomeService->save();
        return redirect('homeServices_Services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeServices_Services  $homeServices_Services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_homeServices=$id;
        return view('admin.Services.HomeServices.create',compact('id_homeServices'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeServices_Services  $homeServices_Services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $HomeService = HomeServices_Services::find($id);
        return view('admin.Services.HomeServices.update',compact('HomeService'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeServices_Services  $homeServices_Services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $HomeService = HomeServices_Services::findOrFail($id);
        $HomeService->HomeServicesId = $request->HomeService_id;
        $HomeService->ServiceName = $request->Service_name;
        $HomeService->ServiceDescription = $request->Service_description;
        $HomeService->ServicePrice = $request->Service_price;
        $HomeService->ServiceTime = $request->Service_time;
        if ($request->hasFile('image')) {
            $HomeServices_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images',$HomeServices_img);
            $HomeService->ServiceImage = $HomeServices_img;
        }

        $HomeService->save();

        return redirect('homeServices_Services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeServices_Services  $homeServices_Services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $HomeService = HomeServices_Services::findorfail($id);
        $HomeService->delete();
        return redirect()->route('homeServices_Services.index');
    }
}
