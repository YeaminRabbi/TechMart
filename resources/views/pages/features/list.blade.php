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
                    <th style="text-align: center;">Category</th>
                    <th style="text-align: center;">Brand</th>
                    <th style="text-align: center;">Model</th>
                                      
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
           
            @foreach ($products as $key => $data)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->product_title}}</td>
                    <td>
                        <img style="height: 70px; width:auto;" src="{{url($data->image)}}" alt="Product Image">
                          
                    </td>

                    <td>{{ $data->Category->categoryname }}</td>
                    <td>{{ $data->brand->brandname }}</td>
                    <td>{{ $data->subcategory->subcategoryname }}</td>
                   

                   

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.features.removefeatured' , $data->id)}}" style="color: white;" class="btn btn-danger m-2">Remove from Featured</a>
                          </div>
                          
                        </div>
                      </td>
                  
                </tr>

            @endforeach                    
      
               
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection