@extends('layouts.main')

@push('title')
    <title>Mobile Category </title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
<h1 class="text-center ">
   <i class="fa-solid fa-layer-group"></i>  Category
</h1>
</div>
<section class="my-5">
<div class="container">
<div class="row theme-product ">
<div class="col-lg-3 mb-4">
    
        <div class="card" >
      <a href="#"><img class="card-img-top" src="{{ asset('assets/images/products/1.jpg') }}" alt="Card image cap"></a>  
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Campus Shoes</h6></a>
        <h5 class="card-title text-center">Rs. 1000</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
       <a href="#"></a> <img class="card-img-top" src="{{ asset('assets/images/products/2.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Apple Watch</h6></a>
        <h5 class="card-title text-center">Rs. 2000</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/3.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
          <a href="#" class="text-decoration-none text-dark"> <h6 class="card-title text-center">Nike Cap</h6></a>
        <h5 class="card-title text-center">Rs. 4000</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/4.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Wooden Chairs</h6></a>
        <h5 class="card-title text-center">Rs. 5000</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/5.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Camera</h6></a>
        <h5 class="card-title text-center">Rs. 2600</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/6.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Women Shoes</h6></a>
        <h5 class="card-title text-center">Rs. 3800</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">LED TV</h6></a>
        <h5 class="card-title text-center">Rs. 38999</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/8.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Washing Machine</h6></a>
        <h5 class="card-title text-center">Rs. 50000</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/9.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Hand Bag</h6></a>
        <h5 class="card-title text-center">Rs. 5400</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href=""><img class="card-img-top" src="{{ asset('assets/images/products/10.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="#" class="text-decoration-none text-dark"><h6 class="card-title text-center">Laptop Bag</h6></a>
        <h5 class="card-title text-center">Rs. 1500</h5>
        </div>
</div>
</div>

</div>

</div>
</section>
@endsection