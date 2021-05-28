<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    //
    protected $table = "alternatif";
    protected $fillable = [
        'nama_alternatif', 'harga', 'deskripsi'
    ];

    public $timestamps = false;
}
