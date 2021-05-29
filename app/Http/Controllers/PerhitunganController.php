<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kriteria;
use App\SubKriteria;
use App\Alternatif;
use App\NilaiAlternatif;
use DB;

class PerhitunganController extends Controller
{
    //

    public function index () {
        return view ('hasil.index');
    }

    public function perhitungan () {

        
        //Memanggil data nllai alternatif
        $data = DB::table('nilai_alternatif')
                ->join('subkriteria', 'nilai_alternatif.subkriteria_id', '=', 'subkriteria.id')
                ->leftjoin('kriteria', 'kriteria.id', '=', 'subkriteria.kriteria_id')
                ->select('bobot_subkriteria', 'nama_kriteria')
                ->get()
                ->groupBy('nama_kriteria');

        // return $data;

        $min = []; //array untuk simpan nilai min setiap kriteria
        $max = []; //array untuk simpan nilai max setiap kriteria
        foreach ($data as $key => $value) {
            $min[$key] = $value->min('bobot_subkriteria'); //mendatapkan nilai min setiap kriteria dan simpan didalam array
            $max[$key] = $value->max('bobot_subkriteria'); //mendapatkan nilai max setiap kriteria dan simpan didalam array
        }

        // return ['min'=>$min, 'max'=>$max];
        //Tahap Metode SAW

        // Proses Normalisasi Data
        $normalisasi = collect(); //membuat collection untuk menyimpan data ternormalisasi

        //memanggil data nilai alternatif untuk proses normalisasi
        $nilai_alternatif = DB::table('nilai_alternatif')
                ->join('subkriteria', 'nilai_alternatif.subkriteria_id', '=', 'subkriteria.id')
                ->leftjoin('kriteria', 'kriteria.id', '=', 'subkriteria.kriteria_id')
                ->get()
                ->groupBy('alternatif_id');

        foreach ($nilai_alternatif as $key => $value) {
            foreach ($value as $item) {
                $alternatif = $item->alternatif_id;
                $atribut = $item->atribut_kriteria;
                $kriteria = $item->nama_kriteria;
                $bobotsub = $item->bobot_subkriteria;

                if ($atribut == 'cost') {
                    $nilaiNormalisasi = $min[$kriteria]/$bobotsub; //rumus normalisasi jika cost        
                }

                if ($atribut == 'benefit') {
                    $nilaiNormalisasi = $bobotsub/$max[$kriteria]; //rumus normalisasi jika benefit
                }

                $normalisasi->push([
                    'alternatif_id'=>$alternatif,
                    'kriteria'=>$kriteria,
                    'atribut'=>$atribut,
                    'normalisasi'=>$nilaiNormalisasi,
                ]);
                
            }
        }

        $ternormalisasi = $normalisasi->groupBy('alternatif_id');
        
        //Perbaikan Bobot
        $bobot_kriteria = Kriteria::all(); //mengambil data bobot kriteria
        $sum_bobot = $bobot_kriteria->sum('bobot_kriteria'); //mencari nilai total seluruh bobot

        $perbaikan_bobot = [];
        foreach ($bobot_kriteria as $perbaikan) {
            $perbaikan_bobot_kriteria = $perbaikan->bobot_kriteria/$sum_bobot;
            $perbaikan_bobot [$perbaikan->nama_kriteria] = $perbaikan_bobot_kriteria;
        }

        //Tahap Metode WP
        // Hitung Vektor S
        $vektorS = [];
        foreach ($ternormalisasi as $d => $nilai) {
            $vektorS[$d] = 1;
            foreach ($nilai as $a => $hasil) {
                $atribut = $hasil['atribut'];
                $alternatif_id = $hasil['alternatif_id'];
                $bobot_ternormalisasi = $hasil['normalisasi'];
                $kriteria = $hasil['kriteria'];
                if ($atribut == 'cost') {
                    $preferensi = pow($bobot_ternormalisasi, (-1*$perbaikan_bobot[$kriteria]));
                }

                if ($atribut == 'benefit') {
                    $preferensi = pow($bobot_ternormalisasi, ($perbaikan_bobot[$kriteria]));
                } 
                $vektorS[$d]*=$preferensi;
            }
        }  

        //Hitung Vektor V
        $sum_VektorS = array_sum($vektorS); //menghitung total Vektor S
        $vektorV = array();
        foreach ($vektorS as $v => $s) {
            $nilaiVektorV = $s/$sum_VektorS;
            $vektorV[$v] = $nilaiVektorV;
        }

        //Perangkingan
        $rekomendasi = collect();
        arsort($vektorV);
        $rank=0;
        foreach($vektorV as $i => $vakhir) {
            $ranking = ++$rank;
            $alternatif = $i;
            $nilaiVakhir = $vakhir;
            $rekomendasi->push([
                'alternatif' => $alternatif,
                'ranking' => $ranking,
                'nilaiV' => $nilaiVakhir,
            ]);
        }

        $notif = 'Berhasil Menampilkan Rekomendasi Smartphone !';

        return view ('hasil.rekomendasi', compact('rekomendasi', 'notif'));
    }
    

}