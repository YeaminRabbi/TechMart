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
                        <h4 class="page-title">Size & Slug update table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start updating your Size Name & Slugs </h4>
                                    <p class="sub-header">
                                            
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.products.update')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                   
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Edit your Product Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="product_title" value="{{$products->product_title}}" id="simpleinput" class="form-control" placeholder="Edit your Brand Name">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Edit your Product Slug</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="slug" value="{{$products->slug}}" id="simpleinput" class="form-control" placeholder="Edit your Brand Slug">
                                                        </div>
                                                    </div>


                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Category</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control selectpicker" name="category_id" data-style="btn-primary">
                                                               
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" {{($category->id == $products->category->id) ? 'selected' : ''}}>{{$category->categoryname}}</option>
                                                                @endforeach  
                                                                
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div>
                                                  
                                                     
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select brand Name</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control " name="brand_id" data-style="btn-primary" data-toggle="select2">
                                                                
                                                                @foreach($brands as $brand)
                                                                     <option value="{{$brand->id}}" {{($brand->id == $products->brand->id) ? 'selected' : ''}}>{{$brand->brandname}}</option>
                                                                @endforeach 
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label">Select Sub Category</label>
                                                        <div class="col-md-10">

                                                            <select class="form-control selectpicker" name="subcategory_id" data-style="btn-primary">
                                                              
                                                                
                                                                @foreach($subCategories as $subCategory)
                                                                    <option value="{{$subCategory->id}}" {{($subCategory->id == $products->subcategory->id) ? 'selected' : ''}}>{{$subCategory->subcategoryname}}</option>
                                                                @endforeach 
                                                                
                                                            </select>
                                                           
                                                        </div>
                                                    </div>
                                                  

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Product Price</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="unit_price" value="{{$products->unit_price}}" id="simpleinput" class="form-control" placeholder="Edit your Brand Slug">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Product Summary</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor" name="summary" class="form-control">{!! $products->summary !!} </textarea>

                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your product description</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor2" name="description" class="form-control">{!! $products->description !!} </textarea>
                                                           
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your product Specification</label>
                                                        <div class="col-md-10">
                                                            <textarea id="my-editor3" name="specification" class="form-control">{!! $products->specification !!} </textarea>
                                                            
                                                        </div>
                                                    </div>

                                                      
                                                    <div class="form-group row">
                                                        <p>Select an image for Thumbnail</p>
                                                       
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
                                                        <img src="{{url($products->image)}}" class="img-thumbnail" style="height: 70px;width:auto;">
                                                    </div>

                                                    
                                                    <div class="form-group row">
                                                        <p>Select an image for Multiple Images</p>
                                                       
                                                        <input type="file" multiple class="filestyle @error('images') is-invalid @enderror" name="images[]" id="images">

                                                        @foreach (App\Gallary::where('product_id', $products->id)->get() as $test)
                                                        <img style="height: 70px; width:auto;" src="{{url($test->images)}}" alt="Product Multiple Images">
                                
                                                        @endforeach
                                                    </div>

                                                    <input type="hidden" class="filestyle" data-btnClass="btn-primary" id="product_id" name="product_id" value="{{ $products->id}}">

                                                        
                                                 
                                                    <a href="{{ route('admin.products.list') }}" class="btn btn-dark">Back
                                                    </a>
                                                    <button type="submit" name="submit" class="btn btn-primary">Update Product Details</button>
                                                    <a href="{{ route('admin.products.attribute.edit', $products->id) }}" class="btn btn-warning">
                                                        Update Product attributes
                                                    </a>
                                                    

                                                    
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

                