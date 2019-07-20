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
                                <a href="{{url('export-laporan/'.$tglmulai.'/'.$tglsampai.'/pending')}}">
                                <div class="invoice-hs">
                                    <span>Exsport Transaksi Pending</span>
                                    <h2>{{$pending}} Data</h2>
                                </div>

                          </a>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{{url('export-laporan/'.$tglmulai.'/'.$tglsampai.'/dikirim')}}">
                                <div class="invoice-hs">
                                    <span>Cetak Data Transaksi Dikirim</span>
                                    <h2>{{$dikirim}} Data</h2>
                                </div>
                              </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="{{url('export-laporan/'.$tglmulai.'/'.$tglsampai.'/dicancel')}}">
                                <div class="invoice-hs">
                                    <span>Cetak Data Transaksi Dicancel</span>
                                     <h2>{{$dicancel}} Data</h2>
                                </div>
                              </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               <a href="{{url('export-laporan/'.$tglmulai.'/'.$tglsampai.'/sukses')}}">
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


@endsection
