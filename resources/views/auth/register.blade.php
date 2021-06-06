<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('anotherassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('anotherassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('anotherassets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>


<style>
    .form .form-element .password-policies {
  position:relative;
  top:0px;
  left:50%;
  transform:translateX(-50%);
  width:90%;
  padding:0px;
  height:0px;
  background:#64C5B1;
  border-radius:5px;
  color: black;
  margin-top:10px;
  box-sizing:border-box;
  opacity:0;
  overflow:hidden;
  transition: height 300ms ease-in-out,
              opacity 300ms ease-in-out;
}
.form .form-element .password-policies.active {
  opacity:1;
  padding:10px;
  height:180px;
}
.form .form-element .password-policies > div {
  margin:15px 10px;
  font-weight:600;
  color:#888;
  transition:all 300ms ease-in-out;
}
.form .form-element .password-policies > div.active {
  color:#111;
}

.form .form-element .toggle-password {
  position:absolute;
  color: green;
  width:67px;
  height:40px;
  top:34px;
  right:2px;
  border-radius:50%;
  text-align:center;
  line-height:35px;
  font-size:20px;
  cursor:pointer;
}


.form .form-element .toggle-password.active i.fa-eye {
  display:none;
}
.form .form-element .toggle-password.active i.fa-eye-slash {
  display:inline;
}
.form .form-element .toggle-password i.fa-eye-slash {
  display:none;
}
</style>

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
                                    <h5 class="text-uppercase mb-1 mt-4">Admin Register</h5>
                                    <p class="mb-0">Get access to our admin panel</p>
                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" action="{{route('register')}}" method="POST">

                                        @csrf

                                        <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="username">Full Name</label>
                                                    <input style="font-size: 24px; font-weight:bold;" autocomplete="off" placeholder="Enter your Full Name" required autocomplete="name" autofocus class="form-control @error('name') is-invalid @enderror" type="text" id="name" required="" name="name" value="{{old('name')}}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                        </div>

                                   



                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input style="font-size: 24px; font-weight:bold;" autocomplete="off" class="form-control @error('email') is-invalid @enderror" type="email" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@gmail.com">
                                               
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror


                                            </div>
                                        </div>
                                    


                                   
                                   

                                        <div class="form-group row form">
                                            
                                            <div class="col-12 form-element">
                                                <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your Password</small></a>
                                                <label for="password">Password</label>
                                                <input style="font-size: 24px; font-weight:bold;" id="password-field" autocomplete="off" class="form-control @error('password') is-invalid @enderror" type="password" id="password"  name="password" required autocomplete="new-password" placeholder="Type your password" >
                                                
                                                
                                               
                                                <div class="toggle-password">
                                                    <i class="fa fa-eye"></i>
                                                    <i class="fa fa-eye-slash"></i>
                                                </div>
                                               
                                                <div class="password-policies">
                                                    <div class="policy-length">
                                                      8 Characters
                                                    </div>
                                                    <div class="policy-number">
                                                      Contains Number
                                                    </div>
                                                    <div class="policy-uppercase">
                                                      Contains Uppercase
                                                    </div>
                                                    <div class="policy-special">
                                                      Contains Special Characters
                                                    </div>
                                                 </div>
                                             </div>

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
                                                <input style="font-size: 24px; font-weight:bold;" id="password-field" autocomplete="off" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password again" >


                                               

                                            </div>
                                        </div>
                                        


                                        
                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">{{ __('Register') }}</button>
                                            </div>
                                        </div>

                                    </form>

                                    {{--  <div class="row">
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
                                    </div>  --}}

                                    <div class="row mt-4 pt-2">
                                        <div class="col-sm-12 text-center">
                                                <p class="text-muted">Already have an account?  <a href="{{ route('login') }}" class="text-dark ml-1"><b>Sign In</b></a></p>
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
    <script src="anotherassets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="anotherassets/js/app.min.js"></script>

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


<script>
    function _id(name){
  return document.getElementById(name);
}
function _class(name){
  return document.getElementsByClassName(name);
}
_class("toggle-password")[0].addEventListener("click",function(){
  _class("toggle-password")[0].classList.toggle("active");
  if(_id("password-field").getAttribute("type") == "password"){
    _id("password-field").setAttribute("type","text");
  } else {
    _id("password-field").setAttribute("type","password");
  }
});

_id("password-field").addEventListener("focus",function(){
  _class("password-policies")[0].classList.add("active");
});
_id("password-field").addEventListener("blur",function(){
  _class("password-policies")[0].classList.remove("active");
});

_id("password-field").addEventListener("keyup",function(){
  let password = _id("password-field").value;
  
  if(/[A-Z]/.test(password)){
    _class("policy-uppercase")[0].classList.add("active");
  } else {
    _class("policy-uppercase")[0].classList.remove("active");
  }
  
  if(/[0-9]/.test(password)){
    _class("policy-number")[0].classList.add("active");
  } else {
    _class("policy-number")[0].classList.remove("active");
  }
  
  if(/[^A-Za-z0-9]/.test(password)){
    _class("policy-special")[0].classList.add("active");
  } else {
    _class("policy-special")[0].classList.remove("active");
  }
  
  if(password.length > 7){
    _class("policy-length")[0].classList.add("active");
  } else {
    _class("policy-length")[0].classList.remove("active");
  }
});
</script>


</body>

</html>