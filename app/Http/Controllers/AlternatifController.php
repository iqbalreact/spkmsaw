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
        $user = Auth::user()->getRoleNames()->first();
        $user_id = Auth::user()->id;
        // return $user;
        if ($user == 'admin') {
            $alternatifs = Alternatif::all();
        }
        
        if ($user == 'pengguna') {
            $alternatifs = Alternatif::where('user_id', 10)
                            ->orWhere('user_id', $user_id)
                            ->get();
        }
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

        $user = Auth::user()->id;
        // return $user;

        $alternatif = new Alternatif;
        $alternatif->nama_alternatif = $request->nama_alternatif;
        $alternatif->harga = $request->harga;
        $alternatif->user_id = $user;
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

        $nilai = NilaiAlternatif::where('alternatif_id', $id);
        $nilai->delete();

        return redirect()->route('alternatif.index');

    }
}
