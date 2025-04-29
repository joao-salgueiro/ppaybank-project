<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RetailersDashBoardController extends Controller
{
    public function index(){
        $retailer = Auth::user();
        $wallet = $retailer->wallet;
        return view('retailers.retailer_dashboard', compact('retailer', 'wallet'));
    }
}
