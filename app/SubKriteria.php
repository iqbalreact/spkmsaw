<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    //
    protected $table = "subkriteria";
    protected $fillable = [
        'kriteria_id','nama_subkriteria', 'bobot_subkriteria'
    ];

    public $timestamps = false;
}
