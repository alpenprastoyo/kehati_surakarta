<?php

namespace App\Http\Controllers;
use App\Models\PohonModel;
use App\Models\BurungModel;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'pohon' => PohonModel::limit(5)->get(),
            'burung' => BurungModel::limit(5)->get()

        ];

        return view('pages/home', $data);
    }
}
