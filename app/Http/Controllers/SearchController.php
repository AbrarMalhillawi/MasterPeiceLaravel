<?php

namespace App\Http\Controllers;
use App\Models\Salon;
use App\Models\HomeService;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function searchSalon(Request $request)
    {
        $search = $request->search;
        $salons = Salon::where('name', 'like', '%'.$search.'%')
            ->orWhere('desc', 'like', '%'.$search.'%')
            ->get();
            return view('user.SearchSalonat',compact('salons'));
        // return view('user.Salonat', ['collection' =>$salons]);
    }


    public function searchHome(Request $request)
    {
        $search = $request->search;
        $homeservices = HomeService::where('name', 'like', '%'.$search.'%')
            ->orWhere('desc', 'like', '%'.$search.'%')
            ->get();
        return view('user.SearchHome',compact('homeservices'));
    }
}

