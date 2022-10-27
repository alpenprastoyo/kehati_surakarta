<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTHController extends Controller
{
    public function index(){
        return view('pages/rth');
    }
}
