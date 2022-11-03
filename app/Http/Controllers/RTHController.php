<?php

namespace App\Http\Controllers;

use App\Models\RTHModel;
use Illuminate\Http\Request;

class RTHController extends Controller
{
    public function index(){
        $data = [
            'rth' => RTHModel::get(),
            'kecamatan' => RTHModel::select('kecamatan')->distinct('kecamatan')->get(),
            'kelurahan' => RTHModel::select('kelurahan')->distinct('kelurahan')->get(),
            'jenis' => RTHModel::select('jenis')->distinct('jenis')->get()
        ];

        return view('pages/rth', $data);
    }
}
