<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\SubKriteria;
use App\Alternatif;
use App\NilaiAlternatif;
use App\User;
use DB;
use Auth;

class NilaiAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $kriterias = NilaiNilaiAlternatif::all();
        $user = Auth::user()->id;
        // return $user;
        $kriterias = Kriteria::all();
        $nilai = NilaiAlternatif::where('user_id', $user)->get()->groupBy('alternatif_id');
        // return $nilai;
        return view ('nilai-alternatif.index', compact('nilai', 'kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();

        return view ('nilai-alternatif.create', compact('kriterias', 'alternatifs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = $request->subkriteria_id;
        $user = Auth::user()->id;

        // $sub = $request->subkriteria_id;

        foreach ($sub as $key => $value) {
            $nilai = new NilaiAlternatif;
            $nilai->alternatif_id = $request->alternatif_id;
            $nilai->subkriteria_id = $value;
            $nilai->user_id = $user;
            $nilai->save();
        }

    
        return redirect()->route('nilai-alternatif.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nilai = NilaiAlternatif::where('alternatif_id', $id)->get();
        $kriterias = Kriteria::all();
        return view ('nilai-alternatif.edit', compact('id','nilai','kriterias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


        $nilai = DB::table('nilai')
                    ->where('id', $id)
                    ->update([
                        // 'kriteria_id' => $request->kriteria_id,
                        'nama_alternatif' => $request->nama_alternatif,
                        'deskripsi' => $request->deskripsi,
                    ]);
                    
        return redirect()->route('nilai-alternatif.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = NilaiAlternatif::where('alternatif_id', $id)->get();
        // return $nilai;
        foreach ($nilai as $key => $value) {
            $value->delete();
        }
        return redirect()->route('nilai-alternatif.index');
    }
}
