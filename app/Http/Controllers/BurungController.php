<?php

namespace App\Http\Controllers;

use App\Models\BurungModel;
use App\Models\RTHModel;
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

    public function detail($id)
    {
        $burung = BurungModel::where('id',$id)->first();
        $data = [
            'burung' => $burung,
            'rth' => BurungModel::where('spesies',$burung->spesies)->groupBy('nama_rth','spesies')->get()
        ];

        return view('pages/burung_detail', $data);
    }

    public function list($id){
        $burung = BurungModel::where('id_rth',$id)->groupBy('spesies')->get();
        $data = [
            'burung' => $burung,
            'rth' => RTHModel::where('id',$id)->first()
        ];

        return view('pages/burung_list', $data);
    }
}
