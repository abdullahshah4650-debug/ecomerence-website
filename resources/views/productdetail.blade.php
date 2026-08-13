@extends('layouts.main')

@push('title')
    <title>Product Detail</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
<h1 class="text-center text-secondary">
   <i class="fa-solid fa-layer-group"></i>  Product Detail
</h1>
</div>

<section class="my-5">
<div class="container">
<div class="row">
<div class="col-lg-4">
<img class="card-img-top rounded img-fluid" src="{{ asset('assets/images/products/1.jpg') }}">
        </div>
<div class="col-lg-8">
<div>
    <h2>Women Shoes</h2>
    <h5>Rs. 1800</h5>
    <div class="my-3">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>


        <h6>2 Customer Ratings</h6>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatum officia <br> nulla voluptatem esse.  Deserunt necessitatibus, odio enim eos vitae ab <br> voluptates amet ex quaerat, iure cumque. Esse illo doloribus omnis commodi.</p>
<div class="my-3">
    <a href="" class="btn theme-green-btn rounded-pill me-1">Add To Cart</a>
    <a href="" class="btn theme-orange-btn rounded-pill">Buy Now</a>
</div>
</div>
</div>

<div class="my-4">
    <h4>Product Description</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eveniet debitis animi quaerat vitae esse libero, distinctio accusantium dignissimos ullam, atque officiis suscipit fuga facilis velit ipsa architecto in eum! Ducimus, placeat. Id asperiores sit, dolore dicta ipsa nihil quod. Tempora nemo cumque accusantium laboriosam maiores sunt quae asperiores ut voluptas architecto optio quidem aut alias qui nesciunt, necessitatibus eum perferendis blanditiis quasi reiciendis vel ipsa. Ab ullam earum voluptatibus. Incidunt nulla hic, repudiandae beatae assumenda doloribus nisi explicabo sunt fugit consequuntur quaerat illo aliquid ipsam nemo eum accusamus non tempore suscipit ullam ipsum praesentium natus distinctio. Obcaecati odit atque nostrum enim eius ex. Similique voluptate aliquid perspiciatis animi porro!</p>
</div>

{{-- Related Products --}}

<div>
    
</div>


</div>
</div>
</section>


@endsection