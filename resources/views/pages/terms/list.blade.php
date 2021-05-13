@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h1 class="header-title">Terms & Conditions Page</h1>
           
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    
                    <th style="text-align: center;">Description</th>
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($terms)>0)
            @foreach ($terms as $term)
                <tr>
                    
                    <td>{{$term->id}}</td>
                    <td>{{$term->description}}</td>
                  
                    
                   

                   
                    

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.terms.edit' , $term->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                          <div >
                            <form action="{{route('admin.terms.destroy', $term->id)}}" method="POST">
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