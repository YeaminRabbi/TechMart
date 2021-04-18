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

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Size Names</th>
                    <th style="text-align: center;">slug</th>
                   
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($sizes)>0)
            @foreach ($sizes as $size)
                <tr>
                    <td>{{$size->id}}</td>
                    <td>{{$size->sizename}}</td>
                    <td>{{$size->slug}}</td>

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.sizes.edit' , $size->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                          <div >
                            <form action="{{route('admin.sizes.destroy', $size->id)}}" method="POST">
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