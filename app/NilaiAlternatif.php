<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiAlternatif extends Model
{
    //
    protected $table = "nilai_alternatif";
    protected $fillable = [
        'alternatif_id', 'subkriteria_id'
    ];

    public $timestamps = false;
}
