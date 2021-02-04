<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\HomeController as Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('hr.home');
    }
}
