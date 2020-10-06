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
        $numberrow = 0;
        
       
            $dataproduk = array();
            $data = array();
            foreach ($rows as $row){
                if($numberrow!=0){
                    $teks = $row[8];
                    $halo = explode("] Nama ", $teks);
                    for ($i=1; $i <count($halo); $i++) {
                        $datatext = explode(";", $halo[$i]);
                        $jumlahdata = count($datatext);
                        print_r($datatext);
                        echo "<br>";
                            $waktu_pesan = explode(' ', $row[2]);
                            $waktu_kirim = explode(' ', $row[7]);
                            $produk = explode(':',$datatext[0]);
                            $variasi = explode(':',$datatext[1]);
                            $harga = explode(':',$datatext[2]);
                            $jumlah = explode(':',$datatext[3]);
                            if($jumlahdata==6){
                                $data_sku =  explode(':',$datatext[4]);
                                if($data_sku[1]=='' || $data_sku[1]==' '){
                                    $sku='-';
                                }else{
                                    $sku = $data_sku[1];
                                }
                                $sku_induk = '-';
                            }elseif($jumlahdata==7){
                                $data_sku =  explode(':',$datatext[4]);
                                $data_sku_induk = explode(':',$datatext[5]);
                                $sku = $data_sku[1];
                                $sku_induk = $data_sku_induk[1];
                            }
                            $data[] = [
                                    'no_resi' => $row[0],
                                    'no_pesanan'=> $row[1],
                                    'waktu_pesan'=> $waktu_pesan[0],
                                    'username' => $row[5],
                                    'waktu_harus_dikirim' => $waktu_kirim[0],
                                    'produk'=> $produk[1],
                                    'nama_variasi'=> $variasi[1],
                                    'harga'=> $harga[1],
                                    'jumlah'=>$jumlah[1],
                                    'sku'=>$sku,
                                    'sku_induk'=>$sku_induk,
                                    'penerima'=>$row[10],
                                    'barang_real'=>$row[8] 
                                ];
                            
                    }
                    echo "<hr>";
                }
                $numberrow++;
            }
            DB::table('tb_transaksi')->insert($data);
        
    }
}
