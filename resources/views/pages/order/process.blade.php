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
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Contact</th>
                        <th style="text-align: center;">Address</th>
                        <th style="text-align: center;">Payment</th>
                        <th style="text-align: center;">Grand Total</th>
                     
                        <th style="text-align: center;">Action</th>
                        
                        
                    </tr>
                </thead>


            <tbody>
           
            @foreach ($shippings as $key => $data)
                <tr>
                    
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->contact}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->payment_type}}</td>
                    <td>{{$data->grand_total}}</td>
                    

                   
                

                   

                    <td>
                        <div class="row">
                            <div>
                                <a  href="{{ route('OrderProductList', $data->id) }}" style="color: white;" class="btn btn-primary m-2">Products</a>
                              </div>
                          <div>
                            <a  href="{{ route('OrderCompleteStatus', $data->id) }}" style="color: white;" class="btn btn-warning m-2"> Complete </a>
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