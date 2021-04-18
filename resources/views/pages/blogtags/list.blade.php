@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h1 class="header-title">All Tags</h1>
            <div class="button-list" style="padding: 30px; display:flex;justify-content:center;" >
                <button type="button" class="btn btn-primary btn-rounded width-md waves-effect waves-light">Politics</button>
                <button type="button" class="btn btn-info btn-rounded width-md waves-effect waves-light">Sports</button>
                <button type="button" class="btn btn-success btn-rounded width-md waves-effect waves-light">Business</button>
                <button type="button" class="btn btn-purple btn-rounded width-md waves-effect waves-light">Fashion</button>
                <button type="button" class="btn btn-warning btn-rounded width-md waves-effect waves-light">Lifestyle</button>
                <button type="button" class="btn btn-danger btn-rounded width-md waves-effect waves-light">Travel</button>
                <button type="button" class="btn btn-pink btn-rounded width-md waves-effect waves-light">Gadget</button>
               
                <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">International News</button>
                <button type="button" class="btn btn-dark btn-rounded width-md waves-effect waves-light">Job</button>
            </div>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Tag Name</th>
                    <th style="text-align: center;">Tag Description</th>
                  
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($blogtags)>0)
            @foreach ($blogtags as $blogtag)
                <tr>
                    <td>{{$blogtag->id}}</td>
                    <td>{{$blogtag->tagname}}</td>
                    <td>{{$blogtag->tagDescription}}</td>
                   
                    

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.blogtags.edit' , $blogtag->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                          <div >
                            <form action="{{route('admin.blogtags.destroy', $blogtag->id)}}" method="POST">
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