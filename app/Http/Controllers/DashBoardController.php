<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashBoardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $wallet = $user->wallet;

        return view('dashboard', compact('user', 'wallet'));
    }
}
