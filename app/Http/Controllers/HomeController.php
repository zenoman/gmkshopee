<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
         $pending = DB::table('tb_transaksi')
        ->where('status','pending')
        ->count();

        $dikirim = DB::table('tb_transaksi')
        ->where('status','dikirim')
        ->count();

        $sukses = DB::table('tb_transaksi')
        ->where('status','sukses')
        ->count();

        $dicancel = DB::table('tb_transaksi')
        ->where('status','dicancel')
        ->count();
        return view('home',['pending'=>$pending,'dikirim'=>$dikirim,'sukses'=>$sukses,'dicancel'=>$dicancel]);
    }
}
