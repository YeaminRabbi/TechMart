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

    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>

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
                                    <h5 class="text-uppercase mb-1 mt-4">Reset Password</h5>
                                    
                                </div>
                               
                                <div class="account-content mt-4">
                                    <form method="POST" action="{{ route('password.update') }}"  >

                                        @csrf

                                        <input type="hidden" name="token" value="{{$request->route('token')}}">

                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input name="email" class="form-control @error('email') is-invalid @enderror" style="font-size: 18px; font-weight:bold;" type="email" id="emailaddress" required="" placeholder="example@gmail.com" autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  
                                              </div>
                                            

                                            </div>
                                            
                                        <div class="form-group row">
                                            
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your Password</small></a>
                                                <label for="password">Password</label>
                                                <input autocomplete="off" class="form-control @error('password') is-invalid @enderror" type="password" id="password" style="font-size: 24px; font-weight:bold;"  name="password" required autocomplete="new-password" placeholder="Type your password" >
                                                
                                                <span style="position: absolute; right:15px;transform:translate(0,0%);top:50%;cursor:pointer;">
                                                    <i class="far fa-eye" onclick="toggle()" id="eye" style="font-size:25px; color:green"></i>
                                                </span>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                 @enderror
                                            </div>
                                        </div>

                                   

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your Password</small></a>
                                                <label for="password">Confirm Password</label>
                                                <input autocomplete="off" id="password-confirm" type="password" class="form-control" style="font-size: 24px; font-weight:bold;" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password again" >
                                            </div>
                                        </div>
                                            

                                       
                                      
                                       

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit" value="update" name="reset" id="reset">{{ __('Update Password') }}</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <button type="button" class="btn mr-1 btn-facebook waves-effect waves-light">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>
                                                <button type="button" class="btn mr-1 btn-googleplus waves-effect waves-light">
                                                    <i class="fab fa-google"></i>
                                                </button>
                                                <button type="button" class="btn mr-1 btn-twitter waves-effect waves-light">
                                                    <i class="fab fa-twitter"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

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