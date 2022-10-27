<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KTPPohonController extends Controller
{
    public function index(){
        return view('pages/ktppohon');
    }
}
