<?php 
use App\Kriteria;
use App\SubKriteria;
use App\Alternatif;
use App\NilaiAlternatif;

function Kriteria($id) {
    // return $nip;
    $kriteria = Kriteria::where('id', $id)->first();
    return $kriteria->nama_kriteria;
}


function Subkriteria($id) {
    // return $nip;
    $sub = Subkriteria::where('id', $id)->first();
    return $sub->nama_subkriteria;
}

function Alternatif($id) {
    // return $nip;
    $alternatif = Alternatif::where('id', $id)->first();
    return $alternatif->nama_alternatif;
}

function Deskripsi($id) {
    // return $nip;
    $alternatif = Alternatif::where('id', $id)->first();
    return $alternatif->deskripsi;
}

function Harga($id) {
    // return $nip;
    $alternatif = Alternatif::where('id', $id)->first();
    return $alternatif->harga;
}

function Nilai($id) {
    // return $nip;
    $nilai = DB::table('nilai_alternatif')
                        ->join('subkriteria', 'nilai_alternatif.subkriteria_id', '=', 'subkriteria.id')
                        ->leftjoin('kriteria', 'kriteria.id', '=', 'subkriteria.kriteria_id')
                        ->where('alternatif_id', $id)
                        ->select('nama_kriteria', 'nama_subkriteria')
                        ->get();
    return $nilai;
}


function getSubKriteria($id) {
    $subkriteria = SubKriteria::where('kriteria_id', $id)->get();
    return $subkriteria;
}

function format_uang($angka){ 
    $hasil =  number_format($angka,0, ',' , '.'); 
    return $hasil; 
}
