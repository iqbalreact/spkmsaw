<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Pegawai;
use App\SasaranKinerja;

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
        // $pegawai = Pegawai::all();
        // $skp = SasaranKinerja::all();
        return view ('dashboard.index');
    }
}
