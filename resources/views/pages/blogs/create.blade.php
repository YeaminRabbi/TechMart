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
                                                <form action="{{route('admin.blogs.store')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Blog Title</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="title" id="simpleinput" class="form-control" placeholder="Write a catchy blog title">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select category</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control selectpicker" name="category" data-style="btn-primary">
                                                                <option style="display: none;">Select a category</option>
                                                                <option value="politics">Politics</option>
                                                                <option value="fashion">Fashion</option>
                                                                <option value="travel">Travel</option>
                                                                <option value="gadget">Gadget</option>
                                                                <option value="business">Business</option>
                                                                <option value="sports">Sports</option>
                                                                <option value="lifestyle">Lifestyle</option>
                                                                <option value="internaional">International News</option>
                                                                <option value="gadget">Gadget</option>
                                                                <option value="specialnews">Special News</option>
                                                                <option value="coronavirus">Corona Virus</option>
                                                                <option value="bangladesh">Bangladesh</option>
                                                                <option value="world">World</option>
                                                                <option value="health">Health</option>
                                                                <option value="job">Job</option>
                                                                <option value="religion">Religion</option>
                                                            </select>
                                                           
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-box">
                                                                <h4 class="header-title">Tags Input</h4>
                            
                                                              
                                                                <p class="sub-header">
                                                                    Just add <code>some tags</code> to your input field to automatically change it to a tags input field.
                                                                </p>
                                                                <div class="tags-default">
                                                                    <input type="text" value="" name="tagValue"  data-role="tagsinput" placeholder="add tags"/>
                                                                </div>
                            
                                                              
                                                            </div>
                            
                                                        </div>
                            
                                                      
                                                    </div><!-- end row --> --}}
                                                    {{-- <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Select Blog Tag</label>
                                                    @foreach ($tags as $tag)
                                                   
                                                        
                                                      
                                                            <div class="col-md-12">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" value="{{$tag->id}}" name="tags[]" class="custom-control-input" id="tag{{$tag->id}}">
                                                                    <label class="custom-control-label" for="tag{{$tag->id}}">{{$tag->tagname}}</label>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        
                                                       
                                                    
                                                    @endforeach
                                                    </div> --}}

                                                    
                                                   
                                                   
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Blog Description</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="description" class="form-control"></textarea>
                                                        </div>
                                                    </div>




                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Highlighted Paragraph</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="highlightedText" rows="15" id="example-textarea" placeholder="Write a highlighted text for this blog"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <p>Select an image</p>
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
                                                    </div>


                                                    <button type="submit" name="submit" class="btn btn-primary">Create Blog</button>
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

                