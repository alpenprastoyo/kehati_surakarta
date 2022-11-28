<?php

namespace App\Http\Controllers;

use App\Models\RTHImageModel;
use App\Models\RTHModel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        $rth = RTHModel::first();
        $files = File::allFiles(public_path().'/img/rth/'.$rth->id.'/');
        // dd($files);
        $images = [];
        foreach($files as $f){
            $images[] = $f->getFileName();
        }
        $rth->image = $images;
        $rth->latitude = str_replace(',','.',$rth->latitude);
        $rth->longitude = str_replace(',','.',$rth->longitude);
        $data = [
            'rth' => $rth,
        ];
        return view('pages/map',$data);
    }

    public function find($id){
        $rth = RTHModel::where('id',$id)->first();
        $files = File::allFiles(public_path().'/img/rth/'.$rth->id.'/');

        $images = [];
        foreach($files as $f){
            $images[] = $f->getFileName();
        }
        $rth->image = $images;
        $rth->latitude = str_replace(',','.',$rth->latitude);
        $rth->longitude = str_replace(',','.',$rth->longitude);
        $data = [
            'rth' => $rth,
        ];


        return view('pages/map',$data);
    }
}
