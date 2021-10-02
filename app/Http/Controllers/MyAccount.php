<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccount extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
}
