<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/pages/signin.css')}}" rel="stylesheet" type="text/css">

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
                    
                    <li class="">                       
                        <a href="{{url('/')}}" class="">
                            <i class="icon-chevron-left"></i>
                            Kembali Ke Home
                        </a>
                        
                    </li>
                </ul>
                
            </div><!--/.nav-collapse -->    
    
        </div> <!-- /container -->
        
    </div> <!-- /navbar-inner -->
    
</div> <!-- /navbar -->



<div class="account-container">
    
    <div class="content clearfix">
        
        <form action="{{ route('login') }}" method="post">
        
            <h1>Member Login</h1>       
            
            <div class="login-fields">
                
                <p>Masukan Username & Password</p>
                
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" required />
                   
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" required/>
                  

                </div>
                 @error('username')
                    <div class="alert alert-danger">
                                              <button type="button" class="close" data-dismiss="alert">×</button>
                                              <strong>Oops!</strong> Username atau password salah, check kembali akun anda.
                                            </div>
                                @enderror
                                  @error('password')
                                    
                    <div class="alert alert-danger">
                                              <button type="button" class="close" data-dismiss="alert">×</button>
                                              <strong>Oops!</strong> Username atau password salah, check kembali akun anda.
                                            </div>
                                @enderror
                  @csrf
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                
                <span class="login-checkbox">
                    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" onclick="return tampilsandi()"/>
                    <label class="choice" for="Field">Lihat Sandi</label>
                </span>
                                    
                <button type="submit" class="button btn btn-success btn-large">Sign In</button>
                
            </div> <!-- .actions -->
            
            
            
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->

<script src="{{asset('assets/js/jquery-1.7.2.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<script src="{{asset('assets/js/signin.js')}}"></script>
<script type="text/javascript">
function tampilsandi(){
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}</script>
</body>

</html>
