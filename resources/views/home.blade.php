@extends('layouts.main')

@push('title')
    <title>Home Page</title>
@endpush


@section('content')

<div id="carouselExampleIndicators"
     class="carousel slide"
     data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">

        <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1">
        </button>

        <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2">
        </button>

        <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3">
        </button>

        <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="3"
                aria-label="Slide 4">
        </button>

    </div>


    <!-- Slides -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('assets/images/slider1.png') }}"
                 class="d-block w-100"
                 alt="Slider 1">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/images/slider2.png') }}"
                 class="d-block w-100"
                 alt="Slider 2">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/images/slider3.png') }}"
                 class="d-block w-100"
                 alt="Slider 3">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slider4.png') }}"
                 class="d-block w-100"
                 alt="Slider 4">
        </div>

    </div>


    <!-- Previous Button -->
    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"
              aria-hidden="true">
        </span>

        <span class="visually-hidden">
            Previous
        </span>

    </button>


    <!-- Next Button -->
    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"
              aria-hidden="true">
        </span>

        <span class="visually-hidden">
            Next
        </span>

    </button>

</div>

{{-- Product section --}}
<section class="my-5">
<div class="container">
    
<div class="d-flex">
  <div class="flex-grow-1"><h2>Top Deals</h2></div>
  <div> <a href="" class="btn theme-green-btn ">View All</a></div>
</div>
<div class="row theme-product">
<div class="col-lg-3">
    
        <div class="card" >
      <a href="#"><img class="card-img-top" src="{{ asset('assets/images/products/1.jpg') }}" alt="Card image cap"></a>  
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Campus Shoes</h6></a>
        <h5 class="card-title text-center">Rs. 1000</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
       <a href="#"></a> <img class="card-img-top" src="{{ asset('assets/images/products/2.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Apple Watch</h6></a>
        <h5 class="card-title text-center">Rs. 2000</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/3.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Nike Cap</h6></a>
        <h5 class="card-title text-center">Rs. 4000</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/4.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Wooden Chairs</h6></a>
        <h5 class="card-title text-center">Rs. 5000</h5>
        </div>
</div>
</div>
</div>
</div>
</section>

{{-- Best of Electronics --}}

<section class="my-5">
<div class="container">
    
<div class="d-flex">
  <div class="flex-grow-1"><h2>Best Of Electronics</h2></div>
  <div> <a href="" class="btn theme-green-btn ">View All</a></div>
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
       <a href="#"></a> <img class="card-img-top" src="{{ asset('assets/images/products/2.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Apple Watch</h6></a>
        <h5 class="card-title text-center">Rs. 2800</h5>
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

{{-- Popular Categories --}}
<section class="my-5">
<div class="container">
    
<div class="d-flex">
  <div class="flex-grow-1"><h2>Best Of Electronics</h2></div>
  <div> <a href="" class="btn theme-green-btn ">View All</a></div>
</div>
<div class="row theme-product">
<div class="col-lg-3">
    
        <div class="card" >
      <a href="#"><img class="card-img-top" src="{{ asset('assets/images/products/9.jpg') }}" alt="Card image cap"></a>  
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Hand Bag</h6></a>
        <h5 class="card-title text-center">Rs. 2500</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
       <a href="#"></a> <img class="card-img-top" src="{{ asset('assets/images/products/2.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Apple Watch</h6></a>
        <h5 class="card-title text-center">Rs. 2800</h5>
        </div>
</div>
</div>
<div class="col-lg-3">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/10.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Laptop Bag</h6></a>
        <h5 class="card-title text-center">Rs. 1900</h5>
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

{{-- Recently Viewed --}}

<section class="my-5">
<div class="container">
    
<div class="d-flex">
  <div class="flex-grow-1"><h2>Recently Viewed</h2></div>
  <div> <a href="" class="btn theme-orange-btn ">View All</a></div>
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



@endsection