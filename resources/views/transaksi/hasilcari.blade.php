@extends('layouts.appadmin')
@section('css')
 <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-xs-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Transaksi</h2>
                    <p>Hasil Pencarian "<b>{{$cari}}</b>"</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-6 col-xs-3 text-right">
                 <button onclick="history.go(-1)" type="button" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</button>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
                    <div class="data-table-list">
                       @if (session('status'))
                        <div class="alert alert-success alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('status') }}
                            </div>
                            @endif
                            @if (session('statuserror'))
                        <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('statuserror') }}
                            </div>
                            @endif
                        <div class="table-responsive">
                            <form action="{{url('/transaksi/hapuspilihan')}}" method="post">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                        <th  class="text-center"><input type="checkbox" onclick="toggle(this)"/></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;?>
                                  @foreach($data as $row)
                                  <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$row->no_resi}}</td>
                                      <td>{{$row->no_pesanan}}</td>

                                      <td>{{$row->waktu_pesan}}</td>
                                      <td>{{$row->username}}</td>
                                      <td>
                                        @if($row->status=='pending')
                                        <span class="label label-info">
                                          {{$row->status}}
                                        </span>
                                        @elseif($row->status=='sukses')
                                        <span class="label label-success">
                                          {{$row->status}}
                                        </span>
                                        @elseif($row->status=='dikirim')
                                        <span class="label label-primary">
                                          {{$row->status}}
                                        </span>
                                        @else
                                        <span class="label label-danger">
                                          {{$row->status}}
                                        </span>
                                        @endif
                                      </td>
                                      <td class="text-center">
                                        <button
                                        type="button" 
                                        class="btn btn-xs btn-default tampil"
                                        data-kode="{{$row->id}}"
                                        data-noresi="{{$row->no_resi}}"
                                        data-nopesanan="{{$row->no_pesanan}}"
                                        data-waktupesan="{{$row->waktu_pesan}}"
                                        data-pembeli="{{$row->username}}"
                                        data-status="{{$row->status}}"
                                        data-haruskirim="{{$row->waktu_harus_dikirim}}">
                                          <i class="fa fa-eye"></i>
                                        </button>

                                         @if($row->status=='pending')
                                         <a href="{{url('/transaksi/kirim/'.$row->no_resi)}}" onclick="return confirm('Kirim Barang ?')" class="btn btn-xs btn-primary"><i class="fa fa-truck"></i></a>
                                        <a href="{{url('/transaksi/cancel/'.$row->no_resi)}}" onclick="return confirm('Cancel Transaksi ?')" class="btn btn-xs btn-warning"><i class="fa fa-ban"></i></a>
                                        <a href="{{url('/transaksi/sukses/'.$row->no_resi)}}" onclick="return confirm('Transaksi Sukses ?')" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                        <a href="{{url('/transaksi/hapus/'.$row->no_resi)}}" onclick="return confirm('Hapus Data ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        @elseif($row->status=='sukses')
                                        
                                        <a href="{{url('/transaksi/hapus/'.$row->no_resi)}}" onclick="return confirm('Hapus Data ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        @elseif($row->status=='dikirim')
                                        
                                        <a href="{{url('/transaksi/cancel/'.$row->no_resi)}}" onclick="return confirm('Cancel Transaksi ?')" class="btn btn-xs btn-warning"><i class="fa fa-ban"></i></a>
                                        <a href="{{url('/transaksi/sukses/'.$row->no_resi)}}" onclick="return confirm('Transaksi Sukses ?')" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>
                                        <a href="{{url('/transaksi/hapus/'.$row->no_resi)}}" onclick="return confirm('Hapus Data ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        @else
                                         
                                        <a href="{{url('/transaksi/hapus/'.$row->no_resi)}}" onclick="return confirm('Hapus Data ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        @endif
                                        
                                       
                                      </td>
                                       <td align="center">&nbsp;&nbsp;&nbsp;<input name="pilihid[]" type="checkbox"  id="checkbox[]" value="{{$row->id}}"  ></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Resi</th>
                                        <th>No. Pesanan</th>
                                        <th>Waktu Pesan</th>
                                        <th>Pemesan</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                        <th  class="text-center"><input type="checkbox" onclick="toggle(this)"/></th>
                                    </tr>
                                </tfoot>
                            </table>
                             <hr>
                              <label>Aksi Data Terpilih</label>
                                <div class="nk-int-st">
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="status">
                                      <option value="hapus">hapus</option>
                                      <option value="dikirim">dikirim</option>
                                      <option value="dicancel">dicancel</option>
                                      <option value="sukses">Sukses</option>
                                    </select>
                                     <button onclick="return confirm('Yakin nih datanya udah bener ?')" type="submit" class="btn btn-success btn-xs"> Submit</button>
                                </div>
                                </div>
                           
         
            {{csrf_field()}}
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="myModalthree" role="dialog">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            </div>
                                            <div class="modal-body">
                                                <h2>Detail Transaksi</h2>
                                                <hr>
                                                <table border="0" width="100%">
                                                  <tr>
                                                    <td>
                                                      <b>No. Resi</b>
                                                    </td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printresi">-</p>
                                                    </td>
                                                    <td width="15%"></td>
                                                    <td><b>Pemesan</b></td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printpemesan"></p>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>No. Pesanan</b></td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printnopesanan">-</p>
                                                    </td>
                                                    <td></td>
                                                    <td><b>Status</b></td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printstatus">-</p>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td><b>Waktu Pesan</b></td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printwaktupesan">-</p>
                                                    </td>
                                                    <td></td>
                                                    <td><b>Waktu Harus Kirim</b></td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>
                                                      <p id="printharuskirim"></p>
                                                    </td>
                                                  </tr>
                                                </table>
                                          <hr>      
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Varian</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>SKU</th>
                                        <th>SKU Induk</th>
                                    </tr>
                                </thead>
                                <tbody id="tubuhnya">
                                    <tr>
                                        <td colspan="7" class="text-center"><p style="color:grey;">Loading...</p></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection
@section('js')
 <script src="{{asset('assets/js/data-table/jquery.dataTables.min.js')}}"></script>
    <script>
  
  $(document).ready(function() {
     $('#data-table-basic').DataTable({
            responsive: true,
            "paging":true
        });
  });

  $('.tampil').on('click', function(){
     $('#tubuhnya').html('<td colspan="7" class="text-center"><p style="color:grey;">Loading...</p></td>');
    var kode = $(this).data('kode');
    var noresi = $(this).data('noresi');
    var nopesanan = $(this).data('nopesanan');
    var waktupesan = $(this).data('waktupesan');
    var pembeli = $(this).data('pembeli');
    var status = $(this).data('status');
    var haruskirim = $(this).data('haruskirim');
    //------------------------------------------------

    //------------------------------------------------
    $('#printresi').html(noresi);
    $('#printnopesanan').html(nopesanan);
    $('#printwaktupesan').html(waktupesan);
    $('#printpemesan').html(pembeli);
    $('#printstatus').html(status);
    $('#printharuskirim').html(haruskirim);
    //-------------------------------------------------
    $.ajax({
                type:'GET',
                dataType:'json',
                url: '/detailtransaksi/'+noresi,
                success:function(data){
                var rows ='';
                var no=0;
                    $.each(data,function(key, value){
                        no +=1;
                        rows = rows + '<tr>';
                        rows = rows + '<td class="text-center">' +no+'</td>';
                        rows = rows + '<td class="text-center">' +value.produk+' Pcs </td>';
                        rows = rows + '<td class="text-center">'+value.nama_variasi+'</td>';
                        rows = rows + '<td class="text-right">' +value.jumlah+'</td>';
                        rows = rows + '<td class="text-right">' +value.harga+'</td>';
                        rows = rows + '<td class="text-center">' +value.sku+'</td>';
                        rows = rows + '<td class="text-center">' +value.sku_induk+'</td>';
                        rows = rows + '</tr>';
                });
                     $('#tubuhnya').html(rows);
                }
            });
    $('#myModalthree').modal('toggle');
  });
   function toggle(source) {
    checkboxes = document.getElementsByName('pilihid[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
    }
    </script>
@endsection