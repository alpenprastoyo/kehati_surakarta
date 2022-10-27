<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTHPublikController extends Controller
{
    public function index(){
        return view('pages/rthpublik');
    }
}
