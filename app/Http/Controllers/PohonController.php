<?php

namespace App\Http\Controllers;

use App\Models\PohonModel;
use App\Models\PohonRTHModel;
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
        $pohon = PohonModel::where('nama_jenis',$id)->first();
        $data = [
            'pohon' => $pohon,
            'rth' => PohonRTHModel::where('nama',$id)->get()
        ];

        return view('pages/pohon_detail', $data);
    }

    public function list($id){
        $pohon = PohonRTHModel::where('id_rth',$id)->get();
        foreach($pohon as $p){
            try {
                $p->iucn = PohonModel::where('nama_jenis',$p->nama)->first()->iucn;
                $p->nama_jenis = PohonModel::where('nama_jenis',$p->nama)->first()->nama_jenis;
                $p->spesies = PohonModel::where('nama_jenis',$p->nama)->first()->spesies;
            } catch (\Throwable $th) {
                dd($p);
            }

        }

        $data = [
            'pohon' => $pohon,
            'rth' => RTHModel::where('id',$id)->first()
        ];

        return view('pages/pohon_list', $data);
    }

}
