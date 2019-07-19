<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
    $dt=date("Y-m-d H:i:s");
    $data=DB::table('tb_transaksi')
    ->where('no_resi',$kod)
    ->update([
        'status'=>'dikirim',
        'tglscan'=>$dt
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
function login(Request $req){    
    $username = $req->username;
    $mypassword = $req->password;
    $data = DB::table('users')
    ->where('username',$username)
    ->count();
    
    if($data > 0){
        $datausers = DB::table('users')
        ->where('username',$username)
        ->orWhere('email',$username)
        ->get();
        
        foreach ($datausers as $du) {
            $id = $du->id;
            $mypass = $du->password;
        }

        if(Hash::check($mypassword,$mypass)){
                return response()->json(['status'=>'1','msg'=>'Berhasil Login','user'=>$datausers]);
        }else{
            return response()->json(['status'=>'0','msg'=>'Maaf Password anda Tidak Sesuai']);
        }
    }else{
        return response()->json(['status'=>'2','msg'=>'Maaf, Pengguna Belum Terdaftar']);
    }
    
}
function upakun(Request $req){
    $kode=$req->kode;
    $username=$req->username;
    $pass=Hash::make($req->password);
    $data=DB::table('users')
    ->where('id',$kode)
    ->update([
        'username'=>$username,
        'password'=>$pass
    ]);
    if($data){
        return response()->json(['status'=>'1','msg'=>'Berhasil Diupdate']);
    }else{
        return response()->json(['status'=>'0','msg'=>'Gagal Diupdate']);
    }
}
function kiriman(){
    $data=DB::table('tb_transaksi')
    ->where('status','dikirim')
    ->groupBy('no_resi')
    ->orderBy('tglscan','DESC')->paginate(20);
     return response()->json($data);
}
}
