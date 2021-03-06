<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class backupcontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function caridata(){
    	return view('backup/caridata');
    }
    public function tampil(Request $request){
    	$tglmulai = $request->tglmulai.' '.$request->jammulai;
    	$tglsampai = $request->tglsampai.' '.$request->jamselesai;

    	 $pending = DB::table('tb_transaksi')
        ->where('status','pending')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->count();

        $dikirim = DB::table('tb_transaksi')
        ->where('status','dikirim')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->count();

        $sukses = DB::table('tb_transaksi')
        ->where('status','sukses')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->count();

        $dicancel = DB::table('tb_transaksi')
        ->where('status','dicancel')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->count();
        //================================================

        $datapending = DB::table('tb_transaksi')
        ->where('status','pending')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->get();

        $datadikirim = DB::table('tb_transaksi')
        ->where('status','dikirim')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->get();

        $datasukses = DB::table('tb_transaksi')
        ->where('status','sukses')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->get();

        $datadicancel = DB::table('tb_transaksi')
        ->where('status','dicancel')
        ->wherebetween('tglscan',[$tglmulai,$tglsampai])
        ->get();
    	
    	return view('backup/tampil',[
    		'tglmulai' 			=>	$tglmulai,
    		'tglsampai' 		=>	$tglsampai,
    		'pending' 			=>	$pending,
    		'dikirim' 			=>	$dikirim,
    		'sukses' 			=>	$sukses,
    		'dicancel' 			=>	$dicancel,
    		'datapending' 		=>	$datapending,
    		'datadikirim' 		=>	$datadikirim,
    		'datasukses' 		=>	$datasukses,
    		'datadicancel' 		=>	$datadicancel
    	]);
    }

    public function hapus($mulai,$sampai){
    	DB::table('tb_transaksi')
        ->wherebetween('tglscan',[$mulai,$sampai])
        ->delete();
        return redirect('/home')->with('status','Backup Data Sukses');
    }
}
