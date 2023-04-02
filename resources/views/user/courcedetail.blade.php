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
   
  <!-- Page Content -->


  <section class="container my-5">

  
    <div class="row">
      
      <div class="col-md-8">
      
        <!-- Video player section -->
        <div class="embed-responsive embed-responsive-16by9 mb-4">
          {{-- <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/wxO5y3JzcWU" allowfullscreen></iframe> --}}
          <iframe width="560" height="315" src="https://www.youtube.com/embed/TiWGpLmYJD4" frameborder="0" allowfullscreen></iframe>
          {{-- https://www.youtube.com/watch?v=wxO5y3JzcWU --}}
          {{-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/wxO5y3JzcWU?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
        </div>

        <!-- Course description section -->
        <h2>Course Description</h2>
        <p>{{$coursedetails->description}}</p>
        <p>Nullam dapibus dolor eu mauris malesuada, a lobortis augue aliquam. Sed varius, magna eget scelerisque facilisis, neque velit volutpat ante, ac fringilla arcu enim at dolor. Etiam imperdiet arcu quis mauris commodo, id malesuada risus bibendum. Sed non neque non eros ullamcorper tristique. Curabitur faucibus, lectus sit amet laoreet vestibulum, lacus ipsum sagittis ex, sit amet bibendum velit magna at mi. Proin rhoncus risus quis dapibus malesuada. Nullam ac tellus erat.</p>
    
      </div>
     

      <div class="col-md-4">
        <!-- Course information section -->
        <div class="card mb-4">
          <div class="card-body">
            <h3 class="card-title">Course Information</h3>
            <ul class="list-unstyled">
              <li><strong>Instructor:</strong> John Doe</li>
              <li><strong>Duration:</strong> 10 hours</li>
              



          
      
       </div>
  </div>


  



    
@endsection


