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
                                                <form action="{{route('admin.abouts.update',$abouts->id)}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                   
                                                    {{method_field('PUT')}}
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Member Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="membername" value="{{$abouts->membername}}" id="simpleinput" class="form-control" placeholder="Enter your Company's Member Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Member Designation</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="memberdesignation" value="{{$abouts->memberdesignation}}" id="simpleinput" class="form-control" placeholder="Enter your Company's Member Designation">
                                                        </div>
                                                    </div>
                                                   
                                                  
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">What your company do</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="wedodescription" class="form-control" placeholder="This is the place where you have to put that what your company is actually doing">{{ $abouts->wedodescription }}</textarea>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Company's Mission</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="missiondescription" class="form-control" placeholder="Write Your company's mission Statement">{{ $abouts->missiondescription }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Company's Vission</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="visiondescription" class="form-control" placeholder="Write Your company's visssion Statement">{{ $abouts->visiondescription }}</textarea>
                                                        </div>
                                                    </div>

                                                   
                                                   
                                                    
                                                 
                                                    
                                                  


                                                     
                                                   
                                                    <div class="form-group row">
                                                        <p>Select an image</p>
                                                       
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
                                                        <img src="{{url($abouts->image)}}" class="filestyle img-thumbnail" style="height: 70px;width:auto;">
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-primary">Update About Information</button>
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


<script src="{{asset('anotherassets/js/vendor.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/switchery/switchery.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('anotherassets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('anotherassets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js')}}"></script>

@endsection