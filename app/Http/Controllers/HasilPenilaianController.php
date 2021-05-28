<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;

class HasilPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $user = Auth::user()->username;

        $role = Auth::user()->getRoleNames()->first();

        $user = Auth::user()->username;
        // return $role;
        if ($role == 'admin') {
            $nilai = DB::table('sasaran_kinerja')
                        // ->where('pegawai_nip', '=', $nip)
                        ->groupBy('periode')
                        ->orderBy('periode', 'desc')
                        ->get();
        } else {
            $nilai = DB::table('sasaran_kinerja')
                        ->where('pegawai_nip', '=', $user)
                        ->groupBy('periode')
                        ->orderBy('periode', 'desc')
                        ->get();
        }

        // return $nilai;

        return view ('hasil.index', compact ('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
