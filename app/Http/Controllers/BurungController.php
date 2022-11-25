<?php

namespace App\Http\Controllers;

use App\Models\BurungModel;
use Illuminate\Http\Request;


class BurungController extends Controller
{
    public function index()
    {
        $data = [
            'burung' => BurungModel::get(),
            'nama_rth' => BurungModel::select('nama_rth')->distinct('nama_rth')->get(),
            'nama_jenis' => BurungModel::select('nama_jenis')->distinct('nama_jenis')->get()
        ];

        return view('pages/burung', $data);
    }
}
