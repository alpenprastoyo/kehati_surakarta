<?php

namespace App\Http\Controllers;

use App\Models\BurungModel;
use App\Models\BurungRTHModel;
use App\Models\RTHModel;
use Illuminate\Http\Request;



class BurungController extends Controller
{
    public function index()
    {
        $data = [
            'burung' => BurungModel::groupBy('nama_jenis')->get()
        ];


        return view('pages/burung', $data);
    }

    public function detail($id)
    {
        $burung = BurungModel::where('nama_jenis',$id)->first();
        $data = [
            'burung' => $burung,
            'rth' => BurungRTHModel::where('nama',$id)->get()
        ];

        return view('pages/burung_detail', $data);
    }

    public function list($id){
        $burung = BurungRTHModel::where('id_rth',$id)->get();
        foreach($burung as $p){
            $p->iucn = BurungModel::where('nama_jenis',$p->nama)->first()->iucn;
            $p->nama_jenis = BurungModel::where('nama_jenis',$p->nama)->first()->nama_jenis;
            $p->spesies = BurungModel::where('nama_jenis',$p->nama)->first()->spesies;
        }
        $data = [
            'burung' => $burung,
            'rth' => RTHModel::where('id',$id)->first()
        ];

        return view('pages/burung_list', $data);
    }
}
