@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
           

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Comment</th>
                    <th style="text-align: center;">Comment Reply</th>
                    <th style="text-align: center;">Reply Username</th>
                   
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
          
            @foreach ($data as $key=> $allreply)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$allreply->comment}}</td>
                    <td>{{$allreply->message}}</td>
                    <td>{{$allreply->username}}</td>
                   
                  
                    <td>
                        <div class="row">
                         
                          <div >
                            <form action="{{route('admin.commentreply.destroy', $allreply->id)}}" method="POST">
                              @csrf
                              @method('Delete')
                              <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                            </form>
                            
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

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
           

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Comment</th>
                    <th style="text-align: center;">Comment Reply</th>
                    <th style="text-align: center;">Reply Username</th>
                   
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
          
            @foreach ($data as $key=> $allreply)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$allreply->comment}}</td>
                    <td>{{$allreply->message}}</td>
                    <td>{{$allreply->username}}</td>
                   
                  
                    <td>
                        <div class="row">
                         
                          <div >
                            <form action="{{route('admin.commentreply.destroy', $allreply->id)}}" method="POST">
                              @csrf
                              @method('Delete')
                              <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                            </form>
                            
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