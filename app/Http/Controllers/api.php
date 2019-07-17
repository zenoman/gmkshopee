<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class api extends Controller
{
   // +++++++++++++++++++++++++++++++API ANDROID++++++++++++++++++++++++++++++++++++++++++++++
   function getket($id){
    $data=DB::table('tb_transaksi')
    ->where('no_resi',$id)
    ->first();        
    if($data){
        return response()->json($data);
    }   
}
function upstat(Request $req){
    $kod=$req->kode;
    $data=DB::table('tb_transaksi')
    ->where('no_resi',$kod)
    ->update([
        'status'=>'dikirim'
    ]);
    if($data){
        return response()->json(['msg'=>'Berhasil Dikirim']);
    }else{
        return response()->json(['msg'=>'Gagal Dikirim']);
    }
}
function uptarik(Request $req){
    $kod=$req->kode;
    $data=DB::table('tb_transaksi')
    ->where('no_resi',$kod)
    ->update([
        'status'=>'dicancel'
    ]);
    if($data){
        return response()->json(['msg'=>'Berhasil Ditarik']);
    }else{
        return response()->json(['msg'=>'Gagal Ditarik']);
    }
}
}
