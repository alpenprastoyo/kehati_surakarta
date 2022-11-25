<?php

namespace App\Http\Controllers;

use App\Models\PohonModel;


use Illuminate\Http\Request;

class PohonController extends Controller
{
    public function index()
    {
        $data = [
            'pohon' => PohonModel::get(),
            'nama_rth' => PohonModel::select('nama_rth')->distinct('nama_rth')->get(),
            'nama_jenis' => PohonModel::select('nama_jenis')->distinct('nama_jenis')->get()
        ];

        return view('pages/pohon', $data);
    }

}
