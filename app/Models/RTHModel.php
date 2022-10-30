<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTHModel extends Model
{
    protected $table = 'kehati_rth';

    protected $fillable = [
        'id',
        'kategori',
        'jenis',
        'lokasi',
        'kecamatan',
        'kelurahan',
        'luas',
        'keterangan_luas',
        'catatan',
        'latitude',
        'longitude',
        'tim',
        'jumlah_pcc'
    ];

    public $timestamps = true;


    use HasFactory;
}
