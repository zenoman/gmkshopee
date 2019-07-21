<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\laporanexport;
use Maatwebsite\Excel\Facades\Excel;
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
    	$tglmulai	= $request->tglmulai.' '.$request->jammulai;
    	$tglsampai = $request->tglsampai.' '.$request->jamselesai;
        $tglmulai2   = $request->tglmulai;
        $tglsampai2 = $request->tglsampai;
    	if($status=='semua'){
    		$data = DB::table('tb_transaksi')
    		->wherebetween('tglscan',[$tglmulai,$tglsampai])
            ->groupby('no_resi')
            ->orderby('id','desc')
    		->get();

            $data2 = DB::table('tb_transaksi')
            ->wherebetween('tglscan',[$tglmulai,$tglsampai])
            ->orderby('id','desc')
            ->get();
            return view('laporan/tampildata',['data'=>$data,'data2'=>$data2,'tglmulai'=>$tglmulai,'tglsampai'=>$tglsampai,'status'=>$status]);
    	}else if($status=='pending'){
        $data = DB::table('tb_transaksi')
        ->where('status',$status)
            ->wherebetween('waktu_pesan',[$tglmulai2,$tglsampai2])
            ->groupby('no_resi')
            ->orderby('id','desc')
            ->get();

            $data2 = DB::table('tb_transaksi')
            ->where('status',$status)
            ->wherebetween('waktu_pesan',[$tglmulai2,$tglsampai2])
            ->orderby('id','desc')
            ->get();
            return view('laporan/tampildata',['data'=>$data,'data2'=>$data2,'tglmulai'=>$tglmulai2,'tglsampai'=>$tglsampai2,'status'=>$status]);
        }else{
    		$data = DB::table('tb_transaksi')
    		->where('status',$status)
    		->wherebetween('tglscan',[$tglmulai,$tglsampai])
            ->groupby('no_resi')
            ->orderby('id','desc')
    		->get();

            $data2 = DB::table('tb_transaksi')
            ->where('status',$status)
            ->wherebetween('tglscan',[$tglmulai,$tglsampai])
            ->orderby('id','desc')
            ->get();
            return view('laporan/tampildata',['data'=>$data,'data2'=>$data2,'tglmulai'=>$tglmulai,'tglsampai'=>$tglsampai,'status'=>$status]);
    	}

    	
    }
    //==============================================================
    public function exsportlaporan($mulai, $sampai, $status){
       
         if($status=='semua'){
         $namafile = "transaksi_tanggal_".$mulai."_sampai_".$sampai."_semua_status.xlsx";   
        }else{
            $namafile = "transaksi_tanggal_".$mulai."_sampai_".$sampai."_".$status.".xlsx";
        }
     return Excel::download(new laporanexport($mulai,$sampai,$status),$namafile);
    }
}
