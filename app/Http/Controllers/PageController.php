<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home(Request $rq){
        $user = DB::select('select * from users');
        var_dump($user);
        return view('page/home');
    }
}
