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
                                    <h5 class="text-uppercase mb-1 mt-4">Verification</h5>
                                    <p class="mb-0">You must verify your email address, please check your email for a verification Link.</p>
                                </div>
                                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                                @endif


                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="{{route('verification.send')}}" method="POST">
                                        @csrf
                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit" value="login">{{ __('Resend EMail') }}</button>
                                            </div>
                                        </div>
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

</body>

</html>