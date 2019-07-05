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
                  
                  <div class="breadcomb-ctn">
                    <h2>Home</h2>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="bar-chart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   @if (session('status'))
                        <div class="alert alert-success alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> {{ session('status') }}
                            </div>
                            @endif
                            <br>
                    <div class="bar-chart-wp">
                        <canvas height="140vh" width="180vw" id="barchart1"></canvas>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
@section('js')
<!--  Chat JS
    ============================================ -->
    <script src="{{asset('assets/js/chat/jquery.chat.js')}}"></script>
    <!-- Charts JS
    ============================================ -->
    <script src="{{asset('assets/js/charts/Chart.js')}}"></script>
    <script>
      var ctx = document.getElementById("barchart1");
  var barchart1 = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Sukses", "Pending", "Dikirim", "Dicancel"],
      datasets: [{
        label: 'Grafik Transaksi',
        data: [
        {{$sukses}}, 
        {{$pending}}, 
        {{$dikirim}}, 
        {{$dicancel}}
        ],
        backgroundColor: [
          
          'rgb(50,205,50, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
  
    </script>
    <!-- <script src="{{asset('assets/js/charts/bar-chart.js')}}"></script> -->
@endsection