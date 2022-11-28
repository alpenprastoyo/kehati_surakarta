<?php

namespace App\Http\Controllers;

use App\Models\PohonModel;
use App\Models\RTHModel;

use Illuminate\Http\Request;

class PohonController extends Controller
{
    public function index()
    {
        $data = [
            'pohon' => PohonModel::groupBy('nama_jenis')->get()
        ];

        return view('pages/pohon', $data);
    }

    public function detail($id)
    {
        $pohon = PohonModel::where('id',$id)->first();
        $data = [
            'pohon' => $pohon,
            'rth' => PohonModel::where('spesies',$pohon->spesies)->groupBy('nama_rth','spesies')->get()
        ];

        return view('pages/pohon_detail', $data);
    }

    public function list($id){
        $pohon = PohonModel::where('id_rth',$id)->groupBy('spesies')->get();
        $data = [
            'pohon' => $pohon,
            'rth' => RTHModel::where('id',$id)->first()
        ];

        return view('pages/pohon_list', $data);
    }

}
