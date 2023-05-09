<?php

namespace App\Http\Controllers;

use App\Models\SalonServices;
use Illuminate\Http\Request;

class SalonServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SalonServices = SalonServices::all();
        return view('admin.Services.SalonServices.index' , compact('SalonServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.Services.SalonServices.create');
    }



    // public function create2($id)
    // {
    //     $SalonService = SalonServices::find($id);
        
    //     return view('admin.Services.SalonServices.create',compact('SalonService'));

    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $SalonServices_img = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/images',$SalonServices_img);
        // var_dump($request->file('upload_file'));

        // insert user
        $SalonService = new SalonServices();
        $SalonService->SalonId= $request->Salon_id;
        $SalonService->ServiceName = $request->Service_name;
        $SalonService->ServiceDescription = $request->Service_description;
        $SalonService->ServicePrice = $request->Service_price;
        $SalonService->ServiceTime = $request->Service_time;
        // $SalonService->ServiceImage= $SalonServices_img;
        $SalonService->save();
        return redirect('salonServices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalonServices  $salonServices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_SalonServices=$id;
        return view('admin.Services.SalonServices.create',compact('id_SalonServices'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalonServices  $salonServices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $SalonService = SalonServices::find($id);
        return view('admin.Services.SalonServices.update',compact('SalonService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalonServices  $salonServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $SalonService = SalonServices::findOrFail($id);
        $SalonService->SalonId = $request->Salon_id;
        $SalonService->ServiceName = $request->Service_name;
        $SalonService->ServiceDescription = $request->Service_description;
        $SalonService->ServicePrice = $request->Service_price;
        $SalonService->ServiceTime = $request->Service_time;
        if ($request->hasFile('image')) {
            $SalonService_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images',$SalonService_img);
            $SalonService->ServiceImage = $SalonService_img;
        }

        $SalonService->save();

        return redirect('salonServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalonServices  $salonServices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SalonService = SalonServices::findorfail($id);
        $SalonService->delete();
        return redirect()->route('SalonServices.index');
    }
}
