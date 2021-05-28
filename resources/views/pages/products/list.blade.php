@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h1 class="header-title">All Categories</h1>
            <div class="button-list" style="padding: 30px; display:flex;justify-content:center;" >
                <button type="button" class="btn btn-primary btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-success btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-purple btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-warning btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-danger btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-pink btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-pink btn-rounded width-md waves-effect waves-light"> #</button>
                <button type="button" class="btn btn-pink btn-rounded width-md waves-effect waves-light"> #</button>

                <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">#</button>
                <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">#</button>
            </div>
            @include('alert.messages')
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Product Name</th>
                    <th style="text-align: center;">Image</th>
                    {{-- <th style="text-align: center;">Images</th> --}}
                    <th style="text-align: center;">Attrbutes</th>
                    <th style="text-align: center;">Category</th>
                    <th style="text-align: center;">Brand</th>
                    <th style="text-align: center;">Model</th>
                    

                 
                   


                   
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($products)>0)
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$product->product_title}}</td>
                    <td>
                        <img style="height: 70px; width:auto;" src="{{url($product->image)}}" alt="Product Image">
                          
                    </td>

                    {{-- <td>
                        @foreach (App\Gallary::where('product_id', $product->id)->get() as $test)
                        <img style="height: 70px; width:auto;" src="{{url($test->images)}}" alt="Product Multiple Images">

                        @endforeach
                    </td> --}}


                    <td>
                        @foreach (App\Attribute::where('product_id', $product->id)->get() as $test)
                            <span class="btn btn-pink btn-rounded width-md waves-effect waves-pink" style="margin: 5px;" >Color: {{ $test->color->colorname }}</span> |
                            <span class="btn btn-warning btn-rounded width-md waves-effect waves-warning" style="margin: 5px;" >Size: {{ $test->size->sizename }}</span> | 
                            <span class="btn btn-primary btn-rounded width-md waves-effect waves-primary" style="margin: 5px;" >Ram: {{ $test->ram }}</span> | 

                            <span class="btn btn-success btn-rounded width-md waves-effect waves-success"style="margin: 5px;" >Quantity: {{ $test->quantity }}</span>
                            <br>
                        @endforeach
                    </td>
                    <td>{{ $product->Category->categoryname }}</td>
                    <td>{{ $product->brand->brandname }}</td>
                    <td>{{ $product->subcategory->subcategoryname }}</td>
                   

                   

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.products.edit' , $product->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                          <div >
                           
                            <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('Delete')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                              </form>
                          </div>
                        </div>
                      </td>
                  
                </tr>

            @endforeach                    
            @endif
               
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection