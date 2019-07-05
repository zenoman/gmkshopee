<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class laporancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cari(){
    	$tgl = DB::table('tb_transaksi')
    	->groupby('waktu_pesan')
    	->orderby('waktu_pesan','desc')
    	->get();
    	$status = DB::table('tb_transaksi')
    	->groupby('status')
    	->get();
    	return view('laporan/cari',['tgl'=>$tgl,'status'=>$status]);
    }

    public function tampil(Request $request){
    	$status = $request->status;
    	$tglmulai	= $request->tglmulai;
    	$tglsampai = $request->tglsampai;

    	if($status=='semua'){
    		$data = DB::table('tb_transaksi')
    		->wherebetween('waktu_pesan',[$tglmulai,$tglsampai])
            ->groupby('no_resi')
            ->orderby('id','desc')
    		->get();

            $data2 = DB::table('tb_transaksi')
            ->wherebetween('waktu_pesan',[$tglmulai,$tglsampai])
            ->orderby('id','desc')
            ->get();
    	}else{
    		$data = DB::table('tb_transaksi')
    		->where('status',$status)
    		->wherebetween('waktu_pesan',[$tglmulai,$tglsampai])
            ->groupby('no_resi')
            ->orderby('id','desc')
    		->get();

            $data2 = DB::table('tb_transaksi')
            ->where('status',$status)
            ->wherebetween('waktu_pesan',[$tglmulai,$tglsampai])
            ->orderby('id','desc')
            ->get();
    	}

    	return view('laporan/tampildata',['data'=>$data,'data2'=>$data2,'tglmulai'=>$tglmulai,'tglsampai'=>$tglsampai,'status'=>$status]);
    }
}