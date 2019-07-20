@extends('layouts.appadmin')
@section('css')
 <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select/bootstrap-select.css')}}">
  <link rel="stylesheet" href="{{asset('assets/js/timepicker.min.css')}}">
@endsection
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
                    <i class="fa fa-file"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Laporan</h2>
                    <p>Cari Data</p>
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
    <div class="data-table-area">
        <div class="container">
            <div class="row">

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="form-element-list">
                      <form action="{{url('laporan/tampil')}}" method="get">
                         @if(session('status'))
                        <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('status') }}
                            </div>
                            @endif
                            <br>
                        @csrf
                        <br>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                             
                              <div class="row">
                                <div class="col-md-6">
                                   <label>Mulai Tanggal</label>
                                 <input type="date" class="form-control" name="tglmulai" required>
                                </div>
                                <div class="col-md-6">
                                   <label>Mulai Jam</label>
                                 <input type="text" id="time" class="form-control" name="jammulai" required>
                                </div>
                                
                                 <div class="col-md-6">
                                  <br>
                                  <label>Sampai Tanggal</label>
                                 <input type="date" class="form-control" name="tglsampai" required>
                                </div>
                                <div class="col-md-6">
                                  <br>
                                   <label>Sampai Jam</label>
                                 <input type="text" id="time2" class="form-control" name="jamselesai" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <label>Status</label>
                                <div class="nk-int-st">
                                <select name="status" class="form-control">
                                       <option value="semua">Semua Status</option>
                                       @foreach($status as $sts)
                                      <option value="{{$sts->status}}">{{$sts->status}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                            <button class="btn btn-primary" type="submit">
                              Tampilkan
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
@endsection
@section('js')
<script src="{{asset('assets/js/timepicker.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select/bootstrap-select.js')}}"></script>
<script>
 var timepicker = new TimePicker(['time','time2'], {
  lang: 'en',
  theme: 'light'
});

timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00')+ ':' + (evt.second || '00');
  evt.element.value = value;

});

</script>
@endsection