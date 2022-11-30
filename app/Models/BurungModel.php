<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurungModel extends Model
{

    protected $table = 'kehati_burung';

    protected $fillable = [
        'id',
        'nama_jenis',
        'spesies',
        'iucn',
        'image'
    ];

    use HasFactory;
}
