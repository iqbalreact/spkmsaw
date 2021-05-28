<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\SubKriteria;
use DB;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subkriterias = SubKriteria::all();
        return view ('sub-kriteria.index', compact('subkriterias'));
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

        return view ('sub-kriteria.create', compact('kriterias'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $subkriteria = new SubKriteria;
        $subkriteria->kriteria_id = $request->kriteria_id;
        $subkriteria->nama_subkriteria = $request->nama_subkriteria;
        $subkriteria->bobot_subkriteria = $request->bobot_subkriteria;
        $subkriteria->save();

        return redirect()->route('sub-kriteria.index');

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
        $subkriteria = SubKriteria::where('id', $id)->first();
        
        // return $obat;
        return view ('sub-kriteria.edit', compact('subkriteria'));
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

        $subkriteria = DB::table('subkriteria')
                    ->where('id', $id)
                    ->update([
                        // 'kriteria_id' => $request->kriteria_id,
                        'nama_subkriteria' => $request->nama_subkriteria,
                        'bobot_subkriteria' => $request->bobot_subkriteria,
                    ]);
                    
        return redirect()->route('sub-kriteria.index');


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

        $subkriteria = SubKriteria::where('id', $id);
        $subkriteria->delete();

        return redirect()->route('sub-kriteria.index');

    }
}
