<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="anotherassets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('anotherassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('anotherassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('anotherassets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    
</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">
    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4">Admin Signin</h5>
                                    <p class="mb-0">Login to your Admin account</p>
                                </div>

                                <div class="account-content mt-4 form">
                                    <form class="form-horizontal" action="{{route('login')}}" method="POST">

                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input name="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" style="font-size: 24px; font-weight:bold;" type="email" id="emailaddress" required="" placeholder="example@gmail.com">
                                                
                                                @error('email')
                                                <span class="invalid-feedback is-invalid" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                            </div>

                                           
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                                <label for="password">Password</label>
                                                <input name="password" class="form-control @error('password') is-invalid @enderror" style="font-size: 24px; font-weight:bold;" type="password" required="" id="password" placeholder="Enter your password">
                                                <span style="position: absolute; right:15px;transform:translate(0,0%);top:50%;cursor:pointer;">
                                                    <i class="far fa-eye" onclick="toggle()" id="eye" style="font-size:25px; color:green"></i>
                                                </span>
                                               
                                             </div>
                                           


                                            @error('password')
                                                <span class="invalid-feedback is-invalid" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                       

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit" value="login">{{ __('Login') }}</button>
                                            </div>
                                        </div>

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <a href="{{route('loginWithGithub')}}" class="btn btn-github btn-rounded waves-effect waves-light">Github Login</a>
                                            </div>
                                        </div>


                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <a  href="{{route('loginWithGoogle')}}" class="btn btn-googleplus btn-rounded waves-effect waves-light"> Google Login</a>
                                            </div>
                                        </div>

                                        {{--  <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <a  href="{{route('loginWithFacebook')}}" class="btn btn-facebook btn-rounded waves-effect waves-light"> Facebook </a>
                                            </div>
                                        </div>  --}}

                                        
                                    </form>

                                    
                                    <div class="row mt-4 pt-2">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-dark ml-1"><b>Sign Up</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('anotherassets/js/app.min.js')}}"></script>


    <script>
var state = false;
function toggle(){
    if(state){
        document.getElementById("password").setAttribute("type","password");
        // document.getElementById("eye").style.color='red';
        state=false;
    }
    else{
        document.getElementById("password").setAttribute("type","text");
        document.getElementById("eye").style.color='';
        state=true;
    }
}
    </script>




</body>

</html>