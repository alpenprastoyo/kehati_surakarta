<?php

namespace App\Http\Controllers;
use App\Models\PohonModel;
use App\Models\BurungModel;
use App\Models\RTHModel;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'pohon' => PohonModel::limit(5)->get(),
            'burung' => BurungModel::limit(5)->get(),
            'jumlah_area' => RTHModel::count(),
            'jumlah_burung' => BurungModel::count(),
            'jumlah_pohon' => PohonModel::count(),

        ];

        return view('pages/home', $data);
    }
}
