@extends('layouts.admin_layout')

@section('content')




<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                <li class="breadcrumb-item active">Basic Inputs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Posts update table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start updating your blog posts</h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.sliders.update',$sliders->id)}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Slider Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="sliderTitle" value="{{$sliders->sliderTitle}}" id="simpleinput" class="form-control" placeholder="Write your slider title">
                                                        </div>
                                                    </div>


                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Slider Title Emphasise</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="TitleEmphasise" value="{{$sliders->TitleEmphasise}}" id="simpleinput" class="form-control" placeholder="Write your slider title emphaise">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Slider Description</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="sliderDetails" value="{{$sliders->sliderDetails}}" id="simpleinput" class="form-control" placeholder="Write your slider description (Maximum 35 words)">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Product Price</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="productPrice" value="{{$sliders->productPrice}}" id="simpleinput" class="form-control" placeholder="Write your product Price">
                                                        </div>
                                                    </div>

                                                  


                                                     
                                                   
                                                    <div class="form-group row">
                                                        <p>Select an image</p>
                                                       
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
                                                        <img src="{{url($sliders->image)}}" class="img-thumbnail" style="height: 70px;width:auto;">
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                      
                        <!-- end row -->


                    

            
        </div> <!-- end container-fluid -->

    </div> <!-- end content -->

    

   

</div>

<section class="amidekhbo">

</section>






<script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/switchery/switchery.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js')}}"></script>



@endsection

                