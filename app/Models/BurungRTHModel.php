<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BurungRTHModel extends Model
{
    protected $table = 'kehati_burung_rth';

    protected $fillable = [
        'id',
        'nama',
        'id_rth',
        'nama_rth'
    ];

    use HasFactory;
}
