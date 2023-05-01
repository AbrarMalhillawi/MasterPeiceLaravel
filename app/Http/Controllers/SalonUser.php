<?php

namespace App\Http\Controllers;
use App\Models\Salon;
use Illuminate\Http\Request;

class SalonUser extends Controller
{

    public function index()
    { 
         $salons=Salon::all();
         
         return view('user.Salonat',compact('salons'));
         

    }

}
