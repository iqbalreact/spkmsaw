<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use DB;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kriterias = Kriteria::all();

        return view ('kriteria.index', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('kriteria.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kriteria = new Kriteria;
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->bobot_kriteria = $request->bobot_kriteria;
        $kriteria->atribut_kriteria = $request->atribut_kriteria;
        $kriteria->save();

        return redirect()->route('kriteria.index');

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
        $kriteria = Kriteria::where('id', $id)->first();
        // return $obat;
        return view ('kriteria.edit', compact('kriteria'));
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

        $kriteria = DB::table('kriteria')
                    ->where('id', $id)
                    ->update([
                        'nama_kriteria' => $request->nama_kriteria,
                        'bobot_kriteria' => $request->bobot_kriteria,
                        'atribut_kriteria' => $request->atribut_kriteria,
                    ]);
                    
        return redirect()->route('kriteria.index');


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

        $kriteria = Kriteria::where('id', $id);
        $kriteria->delete();

        return redirect()->route('kriteria.index');

    }
}
