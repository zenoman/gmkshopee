<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Account Upgrade - Bootstrap Admin Template</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    
    @yield('css')

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
  
  <div class="navbar-inner">
    
    <div class="container">
      
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <a class="brand" href="index.html">
        Bootstrap Admin Template        
      </a>    
      
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
          <li class="dropdown">           
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-user"></i> 
              {{ Auth::user()->username }}
              <b class="caret"></b>
            </a>
            
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </ul>           
          </li>
        </ul>
        
      </div><!--/.nav-collapse -->  
  
    </div> <!-- /container -->
    
  </div> <!-- /navbar-inner -->
  
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

  <div class="subnavbar-inner">
  
    <div class="container">

      <ul class="mainnav">
      
        <li>
          <a href="index.html">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
          </a>              
        </li>
        
        
        
        <li>
          <a href="{{url('admin')}}">
            <i class="icon-user"></i>
            <span>Admin</span>
          </a>            
        </li>
        
        <li>          
          <a href="guidely.html">
            <i class="icon-list-ul"></i>
            <span>Data Pesanan</span>
          </a>                    
        </li>
                
                
                <li>          
          <a href="charts.html">
            <i class="icon-bar-chart"></i>
            <span>Laporan</span>
          </a>                    
        </li>
                
                
                <li>          
          <a href="shortcodes.html">
            <i class="icon-cogs"></i>
            <span>Setting</span>
          </a>                    
        </li>
        
        <li class="dropdown">          
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-long-arrow-down"></i>
            <span>Drops</span>
            <b class="caret"></b>
          </a>  
        
          <ul class="dropdown-menu">
                      <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
                        <li><a href="pricing.html">Pricing Plans</a></li>
                        <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
                    </ul>           
        </li>
      
      </ul>

    </div> <!-- /container -->
  
  </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
      @yield('content')

    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/js/jquery-1.7.2.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/base.js')}}"></script>
@yield('js')
  </body>

</html>
