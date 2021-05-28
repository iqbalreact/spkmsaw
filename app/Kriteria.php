<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
    protected $table = "kriteria";
    protected $fillable = [
        'nama_kriteria', 'bobot_kriteria','atribut_kriteria',
    ];

    public $timestamps = false;
}
