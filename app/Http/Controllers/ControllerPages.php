<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function tamu(){
        return view('admin.tamu');
    }
}
