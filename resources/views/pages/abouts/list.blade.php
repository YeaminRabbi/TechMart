@extends('layouts.admin_layout')

@section('content')


<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h1 class="header-title">Company's About's information</h1>
           

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

           
                <thead>
                <tr>
                    <th style="text-align: center;">Serial Number</th>
                    <th style="text-align: center;">Member Name</th>
                    <th style="text-align: center;">Member Designation</th>
                    <th style="text-align: center;">Company DO</th>
                    <th style="text-align: center;">Company's Mission</th>
                    <th style="text-align: center;">Company's Vission</th>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Action</th>
                    
                </tr>
                </thead>


                <tbody>
            @if (count($abouts)>0)
            @foreach ($abouts as $about)
                <tr>
                    <td>{{$about->id}}</td>
                    <td>{{$about->membername}}</td>
                    <td>{{$about->memberdesignation}}</td>
                    <td>{{$about->wedodescription}}</td>
                    <td>{{$about->missiondescription}}</td>
                    <td>{{$about->visiondescription}}</td>
                   
                    <td>
                        <img style="height: 70px; width:auto;" src="{{url($about->image)}}" alt="image">
                          
                    </td>

                    <td>
                        <div class="row">
                          <div>
                            <a  href="{{route('admin.abouts.edit' , $about->id)}}" style="color: white;" class="btn btn-primary m-2"> Edit </a>
                          </div>
                          <div >
                            <form action="{{route('admin.abouts.destroy', $about->id)}}" method="POST">
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