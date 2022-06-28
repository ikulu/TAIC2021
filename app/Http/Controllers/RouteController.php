<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    // for admin
    public function newuser(){
        return view('superadmin.newuser');
    }

    public function profile(){
        return view('profile');
    }
}