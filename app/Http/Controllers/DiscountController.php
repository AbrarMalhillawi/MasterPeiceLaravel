<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $discounts= Discount::all();
        
        return view('admin.Discount.index' , compact('discounts'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // insert discount
        $discounts = new Discount();
        $discounts->name = $request->name;
        $discounts->code = $request->code;
        $discounts->discount_percentage = $request->discount_percentage;
       
        $discounts->save();
        return redirect('discount');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        $discount =Discount::find($id);
        if (! $discount) {
            return redirect('discount');
        }
        // return view('admin.users.update',compact('user'));
        return view('admin.Discount.update',compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discount = Discount::findOrFail($id);
        $discount->name = $request->name;
        $discount->code = $request->code;
        $discount->discount_percentage = $request->discount_percentage;
        
        
        $discount->save();
        
        return redirect('discount');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discount = Discount::findorfail($id);
        $discount->delete(); 
        return redirect()->route('discount.index');
        // return view('admin.users.index',compact('users'));
    }
}
