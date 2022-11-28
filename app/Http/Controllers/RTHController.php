<?php

namespace App\Http\Controllers;

use App\Models\BurungModel;
use App\Models\PohonModel;
use App\Models\RTHImageModel;
use App\Models\RTHModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



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

    public function getRTH($id){
        $rth = RTHModel::where('id',$id)->first();
        $files = File::allFiles(public_path().'/img/rth/'.$rth->id.'/');
        $images = [];
        foreach($files as $f){
            $images[] = $f->getFileName();
        }
        $rth->image = $images;
        $json = json_encode($rth->toArray()) ;
        echo $json;
    }

    public function detail($id){
        $rth = RTHModel::find($id);
        $files = File::allFiles(public_path().'/img/rth/'.$rth->id.'/');
        $images = [];
        foreach($files as $f){
            $images[] = $f->getFileName();
        }
        $rth->image = $images;
        $data = [
            'rth' => $rth,
            'pohon' => PohonModel::where('id_rth',$id)->get(),
            'burung' => BurungModel::where('id_rth',$id)->get(),
        ];


        return view('pages/rth_detail',$data);
    }

}
