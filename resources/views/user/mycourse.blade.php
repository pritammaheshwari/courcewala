@extends('admin.layout.master')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Dashboard-2</h4>
          <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Library
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="icon nalika-home"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Dashboard One</h2>
                                      
                                        <p>Welcome to Our <span class="bread-ntd">Digital University</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
  
      
  
    <div class="container my-5 ">
        <h1 class="mb-3">Course Listings</h1>

        <div class="row">
          @foreach ($paidCourses as $item)
          <div class="col-md-4 mb-4">
            <div class="card">
              {{-- <img {{ asset('/') }} alt="Course Image" class="card-img-top"> --}}
              <img src="{{ asset('/images/courceimage/'.$item->image) }}"  class="card-img-top"  alt="image" >
              <div class="card-body">
                <h5 class="card-title">{{$item->cource_name}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <a href="{{ route('courseDetail', $item->id) }}" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          @endforeach

        
        </div>
    </div>

        
         </div>
    </div>
  
  </div>

    
@endsection