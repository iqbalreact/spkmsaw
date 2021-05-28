<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\SubKriteria;
use App\Alternatif;
use DB;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $kriterias = Kriteria::all();
        $alternatifs = Alternatif::all();
        return view ('alternatif.index', compact('alternatifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $kriterias = Kriteria::all();
        return view ('alternatif.create', compact('kriterias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $alternatif = new Alternatif;
        $alternatif->nama_alternatif = $request->nama_alternatif;
        $alternatif->harga = $request->harga;
        $alternatif->deskripsi = $request->deskripsi;
        // $alternatif->bobot_subkriteria = $request->bobot_subkriteria;
        $alternatif->save();

        return redirect()->route('alternatif.index');

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
        $alternatif = Alternatif::where('id', $id)->first();
        
        // return $obat;
        return view ('alternatif.edit', compact('alternatif'));
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

        // return $request

        $alternatif = DB::table('alternatif')
                    ->where('id', $id)
                    ->update([
                        // 'kriteria_id' => $request->kriteria_id,
                        'nama_alternatif' => $request->nama_alternatif,
                        'harga' => $request->harga,
                        'deskripsi' => $request->deskripsi,
                    ]);
                    
        return redirect()->route('alternatif.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $alternatif = Alternatif::where('id', $id);
        $alternatif->delete();

        return redirect()->route('alternatif.index');

    }
}
