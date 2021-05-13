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
                                    <h4 class="header-title">Start Writing your Company's Terms & Conditions</h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.faqs.store')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Faq Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="title" id="simpleinput" class="form-control" placeholder="Write your Frequently Asked Question" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Enter Your FAQ Description</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="description" class="form-control" placeholder="Write your Frequently Asked Question's Answer"></textarea>
                                                        </div>
                                                    </div>




                                                    <button type="submit" name="submit" class="btn btn-primary">Create FAQ</button>
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