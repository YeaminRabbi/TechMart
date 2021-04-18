@extends('layouts.admin_layout')

@section('content')




<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            @include('alert.messages')
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
                                                <form action="{{route('admin.blogtags.update',$blogtags->id)}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Blog Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="tagname" value="{{$blogtags->tagname}}" id="simpleinput" class="form-control" placeholder="Write a catchy blog title">
                                                        </div>
                                                    </div>
                                                     
                                             
                                                    
                                                   
                                                    

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Product Summary</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="tagDescription" class="form-control">{{ $blogtags->tagDescription }} </textarea>

                                                            
                                                        </div>
                                                    </div>

                                                  

                                                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
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
    CKEDITOR.replace('my-editor2', options);
    CKEDITOR.replace('my-editor3', options);
</script>



@endsection

                