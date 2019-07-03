<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\transaksimodel;
use App\Imports\transaksiimport;
use Maatwebsite\Excel\Facades\Excel;

class transaksicontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function tambahdata()
    {
    	return view('transaksi/tambah');	
    }

    public function importtransaksi(Request $request){
    	if($request->hasFile('filenya')){
            
        Excel::import(new transaksiimport, request()->file('filenya'));
        }
        
        return redirect('transaksi/tambahdata')->with('status', 'Import data sukses');
    }

    public function listdata(){
        $data = DB::table('tb_transaksi')
        ->groupby('no_resi')
        ->orderby('id','desc')
        ->paginate(20);
        return view('transaksi/listdata',['data'=>$data]);
    }

    public function tambah(Request $request){
        $data = $request->produk;
        for($i=0; $i < count($data) ; $i++){
           if($i == count($data)-1){
                $datanya[] = [
                'no_resi'               => $request->noresi,
                'no_pesanan'            => $request->nopesanan,
                'waktu_pesan'           => $request->waktupesan,
                'status'                => $request->status,
                'username'              => $request->username,
                'waktu_harus_dikirim'   => $request->waktudikirim,
                'produk'                => $request->produk[$i],
                'nama_variasi'          => $request->variasi[$i],
                'jumlah'                => $request->jumlah[$i],
                'harga'                 => $request->harga[$i],
                'sku'                   => $request->sku[$i],
                'sku_induk'             => $request->skuinduk[$i]
            ];
            }else{
                $datanya[] = [
                'no_resi'               => $request->noresi,
                'no_pesanan'            => $request->nopesanan,
                'waktu_pesan'           => $request->waktupesan,
                'status'                => $request->status,
                'username'              => $request->username,
                'waktu_harus_dikirim'   => $request->waktudikirim,
                'produk'                => $request->produk[$i],
                'nama_variasi'          => $request->variasi[$i],
                'jumlah'                => $request->jumlah[$i],
                'harga'                 => $request->harga[$i],
                'sku'                   => $request->sku[$i],
                'sku_induk'             => $request->skuinduk[$i]
            ];
            }
           }
        DB::table('tb_transaksi')->insert($datanya);
        return redirect('transaksi/tambahdata')
        ->with('statusmanual','Input Data Sukses');
    }

    public function caridetail($kode){
        $data = DB::table('tb_transaksi')->where('no_resi',$kode)->get();
        return response()->json($data);
    }
}
