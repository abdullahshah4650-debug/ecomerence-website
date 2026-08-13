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
    <div class="mb-3 d-flex flex-row">
<div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
        </div>
<div class="p-1 mx-2">
  <h6>(2 Customer Ratings)</h6>
</div>


      
    </div>
<div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight"><h6>Quantity</h6></div>
        <div class="p-2 bd-highlight">
            <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
            <span class="mx-2">01</span>
            <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
        </div>
    </div>
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
   <section class="mb-5">
<div class="container">
    
<div class="d-flex">
  <div class="flex-grow-1"><h2>Related Products</h2></div>
  <div> <a href="" class="btn theme-orange-btn rounded-pill ">View All</a></div>
</div>
<div class="row theme-product">
<div class="col-lg-3">
    
        <div class="card" >
      <a href="#"><img class="card-img-top" src="{{ asset('assets/images/products/5.jpg') }}" alt="Card image cap"></a>  
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Camera</h6></a>
        <h5 class="card-title text-center">Rs. 2500</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
       <a href="#"></a> <img class="card-img-top" src="{{ asset('assets/images/products/6.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Women Shoes</h6></a>
        <h5 class="card-title text-center">Rs. 4800</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">LED TV</h6></a>
        <h5 class="card-title text-center">Rs. 39000</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/8.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Washing Machine</h6></a>
        <h5 class="card-title text-center">Rs. 50000</h5>
        </div>
</div>
</div>
</div>
</div>
</section> 
</div>
<hr>

<section >
    <h2>02 Reviews</h2>
    <div class="row mt-4">
<div class="col-lg-1">
    <img class="card-img-top rounded-circle img-fluid" src="{{ asset('assets/images/review/user.png') }}">
</div>
<div class="col-lg-11">
<div>
<h4>John Doe</h4>
<div>
    <div class="d-flex">
<div class="flex-grow-1">
<h6>13 August 2026</h6>
</div>
<div> 
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
</div>
    </div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus minus aliquid voluptatibus. Minima, veniam! <br> Cumque deserunt nostrum quia vitae iste, aspernatur dignissimos nemo voluptatibus natus facere sequi! Sit ullam repellendus porro?</p>
<div>
    <a class="btn btn-sm theme-orange-btn rounded-pill" href="">Reply</a>
</div>
</div>
</div>

<div class="col-lg-1 mt-4">
    <img class="card-img-top rounded-circle img-fluid" src="{{ asset('assets/images/review/user.png') }}">
</div>
<div class="col-lg-11 mt-4">
<div>
<h4>Deniyal</h4>
<div>
    <div class="d-flex">
<div class="flex-grow-1">
<h6>14 November 2025</h6>
</div>
<div> 
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
</div>
    </div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus minus aliquid voluptatibus. Minima, veniam! <br> Cumque deserunt nostrum quia vitae iste, aspernatur dignissimos nemo voluptatibus natus facere sequi! Sit ullam repellendus porro?</p>
<div>
    <a class="btn btn-sm theme-orange-btn rounded-pill" href="">Reply</a>
</div>
</div>
</div>
</div>
</section>

{{-- Add a Review  --}}

<section>
    <div class="container my-5 bg-light p-5">
        <h2>Add a Review </h2>
<div class="row">

    <div class="col-lg-12">
        <form >
                <div class="form-text text-muted">Rate this Product? *
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

                </div>

<div class="row my-3">
<div class="col-lg-6 mb-3">
<input type="text" class="form-control form-control-lg" placeholder="Enter Your Name " >
</div>
<div class="col-lg-6 mb-3">
<input type="email" class="form-control form-control-lg" placeholder="Enter Your Email" >
</div>
<div class="col-lg-12 mb-3">
<textarea class="form-control form-control-lg" placeholder="Enter Your Review" rows="4"></textarea>
</div>
<div>
    <a href="" class="btn theme-orange-btn rounded-pill">Post a Comment <i class="fa-solid fa-right-long"></i></a>
</div>
</div>
        </form>
    </div>

</div>
    </div>
</section>


</div>
</div>
</section>



@endsection