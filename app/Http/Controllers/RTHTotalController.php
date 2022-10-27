<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTHTotalController extends Controller
{
    public function index(){
        return view('pages/rthtotal');
    }
}
