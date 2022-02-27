<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContrller extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function fullName()
    {
        return view('fullName.full-name');
    }

    public function calculator()
    {
        return view('calculator.calculator');
    }
}
