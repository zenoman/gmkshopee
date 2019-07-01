@extends('layouts.appadmin')

@section('css')
<!-- library css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/datatable/datatables.css')}}">
@endsection

@section('content')
<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Data Admin</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <hr>
             <table class="table table-striped table-bordered" id="datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Email</th>
                    <th class="text-center">#</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  @foreach($data as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->level}}</td>
                    <td>{{$row->email}}</td>
                    <td class="text-center">
                      <a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                      <a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            <p class="text-center">
              asdkflasjdfl
            </p>
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
    
</div> <!-- /main -->
@endsection

@section('js')
<script type="text/javascript" charset="utf8" src="{{asset('assets/datatable/datatables.js')}}"></script>
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection
 

