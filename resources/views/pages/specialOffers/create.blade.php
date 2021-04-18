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
                        <h4 class="page-title">insert table</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start Writing your Special Offer</h4>
                                    <p class="sub-header">
                                            
                                    </p>
                                    @include('alert.messages')
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form action="{{route('admin.specialOffers.store')}}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="simpleinput">Enter your Product Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="product_title" id="" class="form-control" placeholder="Enter your Product Title" autocomplete="off">
                                                        </div>
                                                    </div>
                                                   

                                                    
                                                    
                                              

                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Enter your product Price</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="product_price" id="" class="form-control" placeholder="Write Product price" autocomplete="off">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Enter how much quantity does this product available</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="product_available" id="" class="form-control" placeholder="Write how much quantity does this product available" autocomplete="off">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label" for="example-textarea">Enter how many times this product sold</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="product_sold" id="" class="form-control" placeholder="Write how many times this product sold" autocomplete="off">
                                                        </div>
                                                    </div>



                                                   
                                                    <div class="form-group row">
                                                        <p>Select an image</p>
                                                        <input type="file" class="filestyle" data-btnClass="btn-primary" id="image" name="image" placeholder="Enter an image">
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

                