@extends('admin.layout.master')
@section('content')

<form method="POST" action="/upload" enctype="multipart/form-data">
  @csrf
  <input type="file" name="csv_file">
  <button type="submit">Import CSV</button>
</form>



<div class="review">
  <div class="review-header">
    <h2>Customer Name</h2>
    <span class="review-date">March 30, 2023</span>
  </div>
  <div class="review-content">
    <p>This is an example review. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus posuere turpis eget leo bibendum, sed dictum quam semper. Suspendisse hendrerit sapien a tortor suscipit, vel pellentesque sapien viverra. Sed dictum turpis nec ipsum auctor congue. Integer id fringilla elit. Donec ac ipsum at elit hendrerit pretium vel vitae nulla.</p>
  </div>
  <div class="review-rating">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
  </div>
</div>

<style>
  .review {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 20px;
}

.review-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 10px;
}

.review-header h2 {
  margin: 0;
}

.review-date {
  font-size: 14px;
  color: #888;
}

.review-content {
  margin-bottom: 10px;
}

.review-rating {
  font-size: 24px;
  color: #ffc107;
}

.checked {
  color: orange;
}

</style>

    
@endsection


