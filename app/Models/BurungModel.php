<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurungModel extends Model
{

    protected $table = 'kehati_burung';

    protected $fillable = [
        'id',
        'id_rth',
        'nama_rth',
        'nama_jenis',
        'spesies',
        'jumlah',
        'latitude',
        'longitude',
        'iucn',
        'image'
    ];

    use HasFactory;
}
