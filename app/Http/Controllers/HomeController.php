<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Alternatif;
use App\Subkriteria;
use App\Kriteria;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/admin/dashboard');
    }

    public function dashboard()
    {

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

        $kriteria = Kriteria::all();
        $sub = Subkriteria::all();
        $pengguna = User::all();
        // return $pengguna;

        return view ('dashboard.index', compact('alternatifs', 'kriteria', 'sub', 'pengguna'));
    }
}
