@extends('layouts.appadmin')

@section('content')
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="fa fa-download"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Backup</h2>
                    <p>Menampilkan Data Tanggal : {{$tglmulai}} - {{$tglsampai}}</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcomb area End-->
    <!-- Invoice area Start-->
    <div class="invoice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="invoice-wrap">
                        <div class="invoice-hds-pro">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="invoice-ds-int">
                                    <h2>Cara Backup Data</h2>
                                    <ol style="margin-left: 25px;">
                                      <li>Cetak data transaksi terlebih dahulu sebelum anda menghapus data transaksi.</li>
                                      <li>Cetak dengan memencet 4 tombol hijau dibawah ini.</li>
                                      <li>Setelah prosess cetak selesai tekan tombol merah untuk menghapus semua data yang telah anda pilih berdasarkan tanggal.</li>
                                      <li><b>Penting : </b>Data yang telah dihapus tidak dapat dipulihkan lagi, seperti hati yang telah disakiti.</li>
                                    </ol>
                                </div>
                              </div>
                            </div>
                        </div>
                        <hr>
                        <?php 
                          $status = 'dipending';
                        ?>
                        <div class="row">
                          
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="#" id="cetakpending">
                                <div class="invoice-hs">
                                    <span>Exsport Transaksi Pending</span>
                                    <h2>{{$pending}} Data</h2>
                                </div>

                          </a>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="#" id="cetakdikirim">
                                <div class="invoice-hs">
                                    <span>Cetak Data Transaksi Dikirim</span>
                                    <h2>{{$dikirim}} Data</h2>
                                </div>
                              </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="#" id="cetakdicancel">
                                <div class="invoice-hs">
                                    <span>Cetak Data Transaksi Dicancel</span>
                                     <h2>{{$dicancel}} Data</h2>
                                </div>
                              </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               <a href="#" id="cetaksukses">
                                <div class="invoice-hs">
                                    <span>Cetak Data Transaksi Sukses</span>
                                     <h2>{{$sukses}} Data</h2>
                                </div>
                              </a>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                              <a href="{{url('backup/hapus/'.$tglmulai.'/'.$tglsampai)}}" onclick="return confirm('Hapus Data ?')">
                                <div class="invoice-hs gdt-inv text-center">
                                   
                                    <h1 style="color:white;">Hapus Data Terpilih</h1>
                                </div>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hidden_div_pending" style="display: none;">
                                  <h4>Backup Data Transaksi Tanggal <b>{{$tglmulai}}</b> Sampai Tanggal <b>{{$tglsampai}}</b> Status : Pending
                                  </h4>
                                <table width="100%" border="1">
                                  <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th>Produk</th>
                                        <th>Variasi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>SKU Induk</th>
                                  </tr>
                                  <tr>
                                    <?php $i=1;?>
                                  @foreach($datapending as $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->no_resi}}</td>
                                      <td>{{$row->no_pesanan}}</td>

                                      <td>{{$row->waktu_pesan}}</td>
                                      <td>{{$row->username}}</td>
                                      <td>{{$row->status}}
                                      </td>
                                      <td>{{$row->produk}}</td>
                                      <td>{{$row->nama_variasi}}</td>
                                      <td>{{$row->jumlah}}</td>
                                      <td>{{$row->harga}}</td>
                                      <td>{{$row->sku}}</td>
                                      <td>{{$row->sku_induk}}</td>
                                  </tr>
                                  @endforeach
                                  </tr>
                                </table>     
                                </div>

    <div id="hidden_div_dikirim" style="display: none;">
                                  <h4>Backup Data Transaksi Tanggal <b>{{$tglmulai}}</b> Sampai Tanggal <b>{{$tglsampai}}</b> Status : Dikirim
                                  </h4>
                                <table width="100%" border="1">
                                  <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th>Produk</th>
                                        <th>Variasi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>SKU Induk</th>
                                  </tr>
                                  <tr>
                                    <?php $i=1;?>
                                  @foreach($datadikirim as $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->no_resi}}</td>
                                      <td>{{$row->no_pesanan}}</td>

                                      <td>{{$row->waktu_pesan}}</td>
                                      <td>{{$row->username}}</td>
                                      <td>{{$row->status}}
                                      </td>
                                      <td>{{$row->produk}}</td>
                                      <td>{{$row->nama_variasi}}</td>
                                      <td>{{$row->jumlah}}</td>
                                      <td>{{$row->harga}}</td>
                                      <td>{{$row->sku}}</td>
                                      <td>{{$row->sku_induk}}</td>
                                  </tr>
                                  @endforeach
                                  </tr>
                                </table>     
                                </div>
<div id="hidden_div_dicancel" style="display: none;">
                                  <h4>Backup Data Transaksi Tanggal <b>{{$tglmulai}}</b> Sampai Tanggal <b>{{$tglsampai}}</b> Status : Dicancel
                                  </h4>
                                <table width="100%" border="1">
                                  <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th>Produk</th>
                                        <th>Variasi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>SKU Induk</th>
                                  </tr>
                                  <tr>
                                    <?php $i=1;?>
                                  @foreach($datadicancel as $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->no_resi}}</td>
                                      <td>{{$row->no_pesanan}}</td>

                                      <td>{{$row->waktu_pesan}}</td>
                                      <td>{{$row->username}}</td>
                                      <td>{{$row->status}}
                                      </td>
                                      <td>{{$row->produk}}</td>
                                      <td>{{$row->nama_variasi}}</td>
                                      <td>{{$row->jumlah}}</td>
                                      <td>{{$row->harga}}</td>
                                      <td>{{$row->sku}}</td>
                                      <td>{{$row->sku_induk}}</td>
                                  </tr>
                                  @endforeach
                                  </tr>
                                </table>     
                                </div>
<div id="hidden_div_sukses" style="display: none;">
                                  <h4>Backup Data Transaksi Tanggal <b>{{$tglmulai}}</b> Sampai Tanggal <b>{{$tglsampai}}</b> Status : Sukses
                                  </h4>
                                <table width="100%" border="1">
                                  <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th>Produk</th>
                                        <th>Variasi</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>SKU Induk</th>
                                  </tr>
                                  <tr>
                                    <?php $i=1;?>
                                  @foreach($datasukses as $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->no_resi}}</td>
                                      <td>{{$row->no_pesanan}}</td>

                                      <td>{{$row->waktu_pesan}}</td>
                                      <td>{{$row->username}}</td>
                                      <td>{{$row->status}}
                                      </td>
                                      <td>{{$row->produk}}</td>
                                      <td>{{$row->nama_variasi}}</td>
                                      <td>{{$row->jumlah}}</td>
                                      <td>{{$row->harga}}</td>
                                      <td>{{$row->sku}}</td>
                                      <td>{{$row->sku_induk}}</td>
                                  </tr>
                                  @endforeach
                                  </tr>
                                </table>     
                                </div>

@endsection
@section('js')
<script>
  $('#cetakpending').click(function(){
        
         var print_div = document.getElementById("hidden_div_pending");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
        
        });
   $('#cetakdikirim').click(function(){
        
         var print_div = document.getElementById("hidden_div_dikirim");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
        
        });
    $('#cetakdicancel').click(function(){
        
         var print_div = document.getElementById("hidden_div_dicancel");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
        
        });
     $('#cetaksukses').click(function(){
        
         var print_div = document.getElementById("hidden_div_sukses");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
        
        });
</script>
@endsection