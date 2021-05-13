@extends('layouts.admin_layout')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@section('content')




<div class="content-page" style="overflow-y:scroll;position:relative; height: 800px;">
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
                        <h4 class="page-title">insert table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            @include('alert.messages')
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start Writing your blog posts</h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.abouts.store')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Member Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="membername" id="simpleinput" class="form-control" placeholder="Enter your Company's Member Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Member Designation</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="memberdesignation" id="simpleinput" class="form-control" placeholder="Enter your Company's Member Designation">
                                                        </div>
                                                    </div>
                                                   
                                                  
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">What your company do</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="wedodescription" class="form-control" placeholder="This is the place where you have to put that what your company is actually doing"></textarea>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Company's Mission</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="missiondescription" class="form-control" placeholder="Write Your company's mission Statement"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Company's Vission</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="visiondescription" class="form-control" placeholder="Write Your company's visssion Statement"></textarea>
                                                        </div>
                                                    </div>

                                                   
                                                   
                                                    
                                                 
                                                    <div class="form-group row">
                                                        <p>Insert Image</p>
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Upload your company's member Image">
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-primary">Insert About Details</button>
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

<script src="//cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
<script>
var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
};

CKEDITOR.replace('my-editor', options);
</script>
@endsection