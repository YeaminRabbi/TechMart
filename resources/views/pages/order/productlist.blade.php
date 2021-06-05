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
                        
                        <th style="text-align: center;">Order ID</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Quantity</th>
                        <th style="text-align: center;">Size</th>
                        <th style="text-align: center;">Color</th>
                        <th style="text-align: center;">Ram</th>
                        <th style="text-align: center;">Price</th>
                        <th style="text-align: center;">Total</th>
                        
                        
                        
                    </tr>
                </thead>


            <tbody>
           
            @foreach ($products as $key => $data)
                <tr>
                    
                    <td>{{$key+1}}</td>
                    <td>{{$data->product_name}}</td>
                    <td>{{$data->quantity}}</td>
                    <td >{{$data->size}}</td>
                    <td>{{$data->color}}</td>
                    <td>{{$data->ram}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->price * $data->quantity}}</td>

                </tr>

            @endforeach                    
          
               
                </tbody>
            </table>
        </div>
        <a href="{{ route('OrderPending') }}" class="btn btn-dark" style="margin-left: 30px;">Back</a>
    </div>
   
</div>

        </div>
        
    </div>
   
</div>

@endsection