<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Session;

class transaksiimport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
    	$dataproduk = array();
        foreach ($rows as $row) 
        {
        	$teks = $row[8];
        	$halo = explode(";", $teks);
         
			$nomer=1;
            $no = 0;
			for ($i=0; $i < count($halo)-1 ; $i++) { 
				$dataproduk[$no] = $halo[$i];
                $nomer++;
                $no++;
                if($nomer==7){
                $produk = explode(':',$dataproduk[0]);
                $variasi = explode(':',$dataproduk[1]);
				$harga = explode(':',$dataproduk[2]);
                $jumlah = explode(':',$dataproduk[3]);
                $sku = explode(':',$dataproduk[4]);
                $sku_induk = explode(':', $dataproduk[5]);
                $waktu_pesan = explode(' ', $row[2]);
                $waktu_kirim = explode(' ', $row[7]);
                $data[] = [
        		'no_resi' 		=> $row[0],
        		'no_pesanan'	=> $row[1],
        		'waktu_pesan'	=> $waktu_pesan[0],
        		'username'		=> $row[5],
        		'waktu_harus_dikirim' => $waktu_kirim[0],
        		'produk'	=> $produk[1],
        		'nama_variasi'=> $variasi[1],
        		'harga'=> $harga[1],
        		'jumlah'=>$jumlah[1],
        		'sku'=>$sku[1],
        		'sku_induk'=>$sku_induk[1],
                'penerima'=>$row[10] 
                ];
					unset($dataproduk);
                    $dataproduk = array();
					$nomer = 1;
                    $no=0;
				}
			}
        	
        }
       DB::table('tb_transaksi')->insert($data);
    }
}
