
@extends('layouts.admin_layout')
@section('content')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

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
                                           
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Admin Dashboard</h4>
                                   
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->
                {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm text-gray-700 underline">logout</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                       </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
                @endif --}}

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2020-2021 &copy; All Rights Reserved By <a href="{{route('admin.dashboard')}}">Salahuddin IT</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

@endsection



