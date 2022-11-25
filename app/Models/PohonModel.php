<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PohonModel extends Model
{
    protected $table = 'kehati_pohon';

    protected $fillable = [
        'id',
        'id_rth',
        'nama_rth',
        'pcq',
        'nama_jenis',
        'spesies',
        'tinggi',
        'keliling',
        'diameter',
        'jarak_pohon',
        'panjang_coverage',
        'lebar_coverage',
        'latitude',
        'longitude',
        'iucn',
        'keterangan',
        'image'
    ];


    use HasFactory;
}
