<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', 180);
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class admincontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
                ->orderby('id','desc')
                ->get();

        return view('admin/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    public function store(Request $request)
    {

     $rules = [
                    'nama'      => 'required|',
                    'username'  => 'required|alpha_dash',
                    'password'  => 'required|',
                    'konfirmasi_password'=>'required|same:password',
                    'email'     => 'required|email'
                    ];

    $customMessages = [
        'required'  => 'Maaf, :attribute harus di isi',
        'min'       => 'Maaf, data yang anda masukan terlalu sedikit',
        'alpha_dash'=> 'Maaf, tidak menerima data lain kecuali alfabet',
        'same'      => 'Maaf, Pastikan :attribute dan :other sama',
        'email'     => 'Maaf, data harus email'
    ];
        $this->validate($request,$rules,$customMessages);
        $dataadmin = DB::table('users')->where('username',$request->username)->count();
        if($dataadmin>0){
            return back()
            ->with('status','Maaf, username telah di pakai');
        }else{
            DB::table('users')->insert([
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'name'      => $request->nama,
            'email'     => $request->email,
            'level'     => $request->level
        ]);

        return redirect('admin')
        ->with('status','Input Data Sukses');
        }
    }

   
    public function show($id)
    {
        $dataadmin = DB::table('users')->where('id',$id)->get();
        return view('admin/edit',['data'=>$dataadmin]);
    }

   
    public function update(Request $request, $id)
    {
        $dataadmin = DB::table('users')->where('username',$request->username)->count();
        if($request->password!=''){
            if($request->password==$request->konfirmasi_password){
             DB::table('users')
             ->where('id',$id)
             ->update([
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'name'      => $request->nama,
            'email'     => $request->email,
            'level'     => $request->level]);
            }else{
            return back()
            ->with('status','Maaf, username telah di pakai');
            }
           
        }else{
            DB::table('users')
            ->where('id',$id)
            ->update([
            'username'  => $request->username,
            'name'      => $request->nama,
            'email'     => $request->email,
            'level'     => $request->level
        ]);
        }
        return redirect('admin')
        ->with('status','Edit Data Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
         return redirect('admin')
        ->with('status','Hapus Data Sukses');
    }
}
