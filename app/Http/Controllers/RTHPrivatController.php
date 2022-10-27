<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTHPrivatController extends Controller
{
    public function index(){
        return view('pages/rthprivat');
    }
}
