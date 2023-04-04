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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <div class="container mt-4">
        <h2>Dashboard Overview</h2>
        <span>Name -  </span><h4>
          
        <?php  $authName = Auth::user(); 
         if ($authName !== null) {
          $name = $authName->name;
          echo $name;
          // use $name variable
        } else {
          // handle case where $user is null
        }
   
        
        ?></h4>
        {{-- <h1>{{$affiliate_id->;}} </h1> --}}
 <?php
       
      ?>
        <hr>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">Today's Earning</h4>
                {{-- <h6 class="card-subtitle mb-2 text-muted">Including Commission and Payouts</h6> --}}
                <p class="card-text">$1,500.00</p>
              </div>
              <div class="card-footer">
                <a href="#" class="card-link">View Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">Last 7 Day's</h4>
              
                <p class="card-text">$1,500.00</p>
              </div>
              <div class="card-footer">
                <a href="#" class="card-link">View Details</a>
              </div>
            </div>
          </div>



          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title"> Last 30 Day's</h4>
             
                <p class="card-text">$1,500.00</p>
              </div>
              <div class="card-footer">
                <a href="#" class="card-link">View Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">Total Earning</h4>
         
                <p class="card-text">$1,500.00</p>
              </div>
              <div class="card-footer">
                <a href="#" class="card-link">View Details</a>
              </div>
            </div>
          </div>

<?php 
$affiliate_id ='';
    $affiliate_id = Auth::user();

         if ($affiliate_id !== null) {
          $refurl =$affiliate_id->referral_code;
          $url = url('registrationForm/?ref=').$refurl;
          echo $url;
   
        } else {
          // handle case where $user is null
        }

  

// $link = affiliateLink('http://127.0.0.1:8000', $affiliate_id);

// echo 


// echo $link;

 ?>

          
    </div>
    <style>

  span {
    display: inline;
  }

  h4 {
    display: inline;
    margin-left: 10px; /* optional, adds some space between the span and h3 elements */
    text-transform: capitalize;
  }
    </style>
  
     
    
    
@endsection






