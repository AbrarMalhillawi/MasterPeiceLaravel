<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeUser extends Controller
{
    public function index()
    {
        $homeservices=HomeService::all();

        return view('user.homeservices',compact('homeservices'));
    }
}
