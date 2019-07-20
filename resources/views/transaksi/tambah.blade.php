@extends('layouts.appadmin')
@section('css')
 <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select/bootstrap-select.css')}}">
@endsection
@section('content')
<script language="Javascript" type="text/javascript">
//fungsi remove html
//====================================================
Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}
//====================================================

var counter = 1; //variabel nomor inputan
var limit = 5; // limit

//fungsi tambah input
function addInput(divName){

 if (counter == limit)  {
    alert("Limit hanya " + counter + " inputan");
 }
 else {
    var newdiv = document.createElement('div');
    newdiv.innerHTML =
      '<div id="input'+counter+'">'+
      '<div class="row">'+
      '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">'+
                              '<label>Produk</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="produk[]" required>'+
                                    '</div>'+
                            '</div>'+
                            '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">'+
                              '<label>Nama Variasi</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="variasi[]" required>'+
                                    '</div>'+
                            '</div>'+
                            '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">'+
                              '<label>Harga</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="harga[]" required>'+
                                    '</div>'+
                            '</div>'+
                        '</div>'+
                        '<br>'+
                        '<div class="row">'+
                            '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">'+
                              '<label>Jumlah</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="jumlah[]" required>'+
                                    '</div>'+
                            '</div>'+
                            '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">'+
                              '<label>SKU</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="sku[]" required>'+
                                    '</div>'+
                            '</div>'+
                            '<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">'+
                              '<label>SKU Induk</label>'+
                                    '<div class="nk-int-st">'+
                                        '<input type="text" class="form-control" name="skuinduk[]" required>'+
                                    '</div>'+
                             
                            '</div>'+
                            '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">'+
                              '<label>&nbsp;</label>'+
                                    '<div class="nk-int-st">'+
                                       '<button onclick="del('+counter+')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></button>'+
                                    '</div>'+
                             
                            '</div>'+
                            '</div><hr style="border-top: 5px solid #ccc;"></div>';;

    document.getElementById(divName).appendChild(newdiv);
    counter++;
 }
}
//fungsi hapus input
function del(no) {
  document.getElementById('input'+no).remove();
  counter = counter - 1;
  for(i=no;i<=limit;i++){
    var id = document.getElementById('input'+i);
    if (id === null){

    } else {

    }
  }
}
</script>
<div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Transaksi</h2>
                    <p>Tambah Data Transaksi</p>
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
    <!-- Data Table area Start-->
    <div class="accordion-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="accordion-wn-wp">
                        <div class="accordion-hd">
                            <h2>Import Excel</h2>
                        </div>
                        <div class="row">
                           @if (session('status'))
                        <div class="alert alert-success alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('status') }}
                            </div>
                            @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="true">
                              Upload File Excel
                            </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                   <form action="{{url('transaksi')}}" method="post" enctype="multipart/form-data">
                       
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <label>Upload</label>
                                    <div class="nk-int-st">
                                        <input type="file" class="form-control" name="filenya" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" required>
                                    </div>
                                     @csrf
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                               <label>&nbsp;</label>
                               <div class="nk-int-st">
                              <button class="btn btn-primary" type="submit">
                              Simpan
                            </button>
                          </div>
                            </div>
                       
                        </div>
                      </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
                              Cara Upload
                            </a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                  <p>
                                                    <ol style="margin-left: 25px;">
                                                    <li>Hapus header di file excel</li>
                                                    <li>Replace semua simbol petik dua di file excel</li>
                                                    <li>Pastikan tidak ada emotikon atau simbol nyeleneh</li>
                                                    <li>Jangan upload file excel yang telah di edit secara mendalam</li>
                                                  </ol>
                                                  </p>
                                                  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-wn-wp mg-t-30">
                      <div class="accordion-hd">
                            <h2>Input Data Manual</h2>
                        </div>
                       <div class="form-element-list">
                      <form action="{{url('tambahtransaksi')}}" method="post">
                        
                        <div class="row">
                             @if (session('statusmanual'))
                        <div class="alert alert-success alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('status') }}
                            </div>
                            @endif
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <label>No. Resi</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="noresi" required>
                                    </div>
                             
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <label>No. Pesanan</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nopesanan" required>
                                    </div>
                            </div>
                        @csrf
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                              <label>Username Pemesan</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                             
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                              <label>Nama Penerima</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="namapenerima" required>
                                    </div>
                             
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <label>Status</label>
                                <div class="nk-int-st">
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="status">
                                      <option value="pending">Pending</option>
                                      <option value="dikirim">Dikirim</option>
                                      <option value="dicancel">Dicancel</option>
                                      <option value="sukses">Sukses</option>
                                    </select>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <label>Waktu Pesan</label>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" name="waktupesan" required>
                                    </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <label>Waktu Harus Dikirim</label>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" name="waktudikirim" required>
                                    </div>
                             
                            </div>
                        </div>

                        <br><hr style="border-top: 5px solid #ccc;">
                        <br>
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <label>Produk</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="produk[]" required>
                                    </div>
                             
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <label>Nama Variasi</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="variasi[]" required>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <label>Harga</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="harga[]" required>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                              <label>Jumlah</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="jumlah[]" required>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                              <label>SKU</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="sku[]" required>
                                    </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                              <label>SKU Induk</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="skuinduk[]" required>
                                    </div>
                            </div>
                            <br>
                          </div>
                          <hr style="border-top: 5px solid #ccc;">
                        <div id="dynamicInput">
                        </div>
                            <br><br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                              <button type="button" onClick="addInput('dynamicInput');" class="btn btn-warning"><i class="fa fa-plus"> Tambah Produk</i></button>
 
                            <button class="btn btn-primary" type="submit">
                              Simpan
                            </button>
                            <button class="btn btn-danger" onclick="history.go(-1)">
                              Kembali
                            </button>
                            </div>
                        </div>
                      </form>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('assets/js/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection