<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class laporanexport implements FromCollection, WithHeadings, ShouldAutoSize
{
    public function __construct(string $tglmulai,string $tglsampai,string $status)
    {
        $this->tgl1 = $tglmulai;
        $this->tgl2 = $tglsampai;
    	$this->status = $status;
    }

    public function collection()
    {
    	if($this->status=='semua'){
    		return DB::table('tb_transaksi')
        	->select(DB::raw('no_resi,no_pesanan,waktu_pesan,status,username,waktu_harus_dikirim,barang_real,tglscan'))
    		->whereBetween('tglscan',[$this->tgl1,$this->tgl2])
            ->orderby('id','desc')
    		->get();
    	}else if($this->status=='pending'){
            return DB::table('tb_transaksi')
            ->select(DB::raw('no_resi,no_pesanan,waktu_pesan,status,username,waktu_harus_dikirim,barang_real,tglscan'))
            ->whereBetween('waktu_pesan',[$this->tgl1,$this->tgl2])
            ->where('status',$this->status)
            ->orderby('id','desc')
            ->get();
        }else{
    	return DB::table('tb_transaksi')
        	->select(DB::raw('no_resi,no_pesanan,waktu_pesan,status,username,waktu_harus_dikirim,barang_real,tglscan'))
    		->whereBetween('tglscan',[$this->tgl1,$this->tgl2])
            ->where('status',$this->status)
            ->orderby('id','desc')
    		->get();	
    	}
        
    }

    public function headings(): array
    {
        return [
            'No. Resi',
            'No. Pesanan',
            'Waktu Pesan',
            'Status',
            'username',
            'waktu harus dikirim',
            'Nama Produk',
            'Tanggal Scan'
        ];
    }
}
