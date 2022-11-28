<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTHImageModel extends Model
{
    protected $table = 'kehati_rth_images';

    protected $fillable = [
        'id',
        'id_rth',
        'image'
    ];

    public $timestamps = true;

    use HasFactory;
}
