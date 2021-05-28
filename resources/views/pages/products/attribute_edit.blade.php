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
                        <h4 class="page-title">Attribute Data</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Start updating your Product Attribute(s) </h4>
                                   
                                    <p class="sub-header" style="font-weight:700;">
                                        Product Name: {{ $product->product_title }}    
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                            
                                                
                                            
                                            @foreach ($products_attribute as $products)
                                                <form action="{{ route('attribute_update') }}" method="POST" style="border:1px solid black;padding:15px;margin-top:2px;">
                                                    @csrf
                                                <input type="hidden" name="attribute_id" value="{{ $products->id }}">
                                                <div id="" style="margin-bottom:20px;">
                                                    <div class="row mg-t-20 attri">
                                                        <label for="color_id" class="col-sm-1 form-control-label">{{ __('Color')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="color_id" id="color_id" class="form-control selectpicker">
                                                                @foreach($colors as $color)
                                                                <option value="{{$color->id}}" {{($color->id == $products->color->id) ? 'selected' : ''}}>{{$color->colorname}}</option>
                                                                @endforeach 
                                                            </select>
                                                        </div>
                                                        <label for="size_id" class="col-sm-1 form-control-label">{{ __('Size')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="size_id" id="size_id" class="form-control selectpicker">
                                                                @foreach($sizes as $size)
                                                                <option value="{{$size->id}}" {{($size->id == $products->size->id) ? 'selected' : ''}}>{{$size->sizename}}</option>
                                                                @endforeach 
                                                            </select>
                                                        </div>

                                                        <label for="ram" class="col-sm-1 form-control-label">{{ __('Ram')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="ram" id="asd" class="form-control selectpicker">
                                                                <option value="4GB" {{("4GB" == $products->ram) ? 'selected' : ''}}>4GB</option>
                                                                <option value="8GB" {{("8GB" == $products->ram) ? 'selected' : ''}}>8GB</option>
                                                                <option value="16GB" {{("16GB" == $products->ram) ? 'selected' : ''}}>16GB</option>
                                                                <option value="64GB" {{("64GB" == $products->ram) ? 'selected' : ''}}>64GB</option>
                                                                <option value="2GB" {{("2GB" == $products->ram) ? 'selected' : ''}}>2GB</option>

                                                                <option value="NULL" {{("NULL" == $products->ram) ? 'selected' : ''}}>NULL</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <label for="quantity" class="col-sm-1 form-control-label">{{ __('Quantity')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                          <input type="text" name="quantity" class="form-control" value="{{ $products->quantity }}" placeholder="30">
                                                        </div>

                                                        <label for="quantity" class="col-sm-1 form-control-label">Variant Price:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                          <input type="text" name="variant_price" class="form-control" value="{{ $products->variant_price }}" >
                                                        </div>
                                                    
                                                        <button type="submit" name="submit" class="btn btn-warning">Update Attributes</button>
                                                        
                                                        <a  href="{{route('attribute_delete' , $products->id)}}" style="color: white;" class="btn btn-danger ml-2"> Delete </a>
                                                       
                                                    </div><!-- row -->
                                                   
                                                </div> 
                                                
                                            </form>
                                                @endforeach
                                           
                                            
                                                
                                                <a  href="{{route('admin.products.edit' , $product->id)}}" style="color: white;" class="btn btn-dark m-2">Back </a>
                                            </div>
                                        </div>

                                    </div>


                                    
                                    
                                </div> <!-- end card-box -->
                            </div><!-- end col -->


                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Add more Attribute(s) to your Product </h4>
                                   
                                    <p class="sub-header" style="font-weight:700;">
                                        Product Name: {{ $product->product_title }}    
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                            
                                                
                                            
                                                
                                            <form action="{{ route('attribute_add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div id="items" style="margin-top:20px;">
                                                    <div class="row mg-t-20 attri">
                                                        <label for="color_id" class="col-sm-1 form-control-label">{{ __('Color')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="color_id[]" id="color_id" class="form-control selectpicker">
                                                              @foreach ($colors as $color)
                                                                  <option value="{{ $color->id }}">{{ $color->colorname }}</option>
                                                              @endforeach
                                                            </select>
                                                        </div>
                                                        <label for="size_id" class="col-sm-1 form-control-label">{{ __('Size')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="size_id[]" id="size_id" class="form-control selectpicker">
                                                              @foreach ($sizes as $size)
                                                                  <option value="{{ $size->id }}">{{ $size->sizename }}</option>
                                                              @endforeach
                                                            </select>
                                                        </div>
                                                        
                                                        <label for="ram" class="col-sm-1 form-control-label">{{ __('Ram')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                            <select name="ram[]" id="ram" class="form-control selectpicker">
                                                                <option value="4GB">4GB</option>
                                                                <option value="8GB">8GB</option>
                                                                <option value="16GB">16GB</option>
                                                                <option value="64GB">64GB</option>
                                                                <option value="2GB">2GB</option>
                                                                <option value="NULL">NULL</option>
                                                            </select>
                                                        </div>

                                                        <label for="quantity" class="col-sm-1 form-control-label">{{ __('Quantity')}}:</label>
                                                        <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                          <input type="text" name="quantity[]" class="form-control" placeholder="30">
                                                        </div>

                                                        <label for="quantity" class="col-sm-1 form-control-label">Variant Price:</label>
                                                            <div class="col-sm-1 mg-t-10 mg-sm-t-0">
                                                                <input type="text" name="variant_price[]" class="form-control">
                                                            </div>
                                                        {{-- ADD Button --}}
                                                        
                                                        <span id="add" class="btn btn-primary add-more button-blue tx-uppercase mr-2">ADD</span>
                                                        <span class="delete btn btn-primary add-more button-blue tx-uppercase mr-2">Remove</span>
                                                       
                                                    </div><!-- row -->
                                                </div>  
                                                
                                                <div style="margin-top: 30px;">
                                                    <button type="submit" name="submit" class="btn btn-success" >Add Attributes</button>
                                               
                                                        <a  href="{{route('admin.products.list')}}"  class="btn btn-dark m-2" > Product List </a>
                                                
                                                </div>

                                            </form>
                                              
                                           
                                            
                                                
                                            </div>
                                        </div>

                                    </div>


                                    
                                    
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
     
     $(document).ready(function(){
         
         $(".delete").hide();
         $("#add").click(function(e){
             $(".delete").fadeIn("1500");
             $("#items").append(
                 '<div class="row mg-t-20 attri" style="margin-top:20px;">'+
                     '<label for="color_id" class="col-sm-1 form-control-label">{{ __('Color')}}:</label>'+
                     '<div class="col-sm-1 mg-t-10 mg-sm-t-0">'+
                         '<select name="color_id[]" id="color_id" class="form-control ">'+
                             '@foreach ($colors as $color)'+
                             '<option value="{{ $color->id }}">{{ $color->colorname }}</option>'+
                             '@endforeach'+
                         '</select>'+
                     '</div>'+
                     '<label for="size_id" class="col-sm-1 form-control-label">{{ __('Size')}}:</label>'+
                     '<div class="col-sm-1 mg-t-10 mg-sm-t-0">'+
                         '<select name="size_id[]" id="size_id" class="form-control">'+
                             '@foreach ($sizes as $size)'+
                                 '<option value="{{ $size->id }}">{{ $size->sizename }}</option>'+
                             '@endforeach'+
                         '</select>'+
                     '</div>'+
                     '<label for="ram" class="col-sm-1 form-control-label">{{ __('Ram')}}:</label>'+
                     '<div class="col-sm-1 mg-t-10 mg-sm-t-0">'+
                         '<select name="ram[]" id="ram" class="form-control">'+
                            '<option value="4GB">4GB</option>'+
                            '<option value="8GB">8GB</option>'+
                            '<option value="16GB">16GB</option>'+
                            '<option value="64GB">64GB</option>'+
                            '<option value="2GB">2GB</option>'+
                            '<option value="NULL">NULL</option>'+
                         '</select>'+
                     '</div>'+
                     '<label for="quantity" class="col-sm-1 form-control-label">{{ __('Quantity')}}:</label>'+
                         '<div class="col-sm-1 mg-t-10 mg-sm-t-0">'+
                             '<input type="text" name="quantity[]" class="form-control" placeholder="30">'+
                         '</div>'+
                    '<label class="col-sm-1 form-control-label">Variant Price:</label>'+
                         '<div class="col-sm-1 mg-t-10 mg-sm-t-0">'+
                             '<input type="text" name="variant_price[]" class="form-control" placeholder="">'+
                         '</div>'+
                 '</div>'
             );
         });
         $("body").on("click", ".delete", function(e){
             $(".attri").last().remove();
         });
     });
 </script>



@endsection

                