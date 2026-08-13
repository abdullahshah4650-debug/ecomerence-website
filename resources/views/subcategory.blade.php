@extends('layouts.main')

@push('title')
    <title>Sub `Category </title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
<h1 class="text-center ">
   <i class="fa-solid fa-list"></i> Sub-Category
</h1>
</div>
<section class="my-5">
<div class="container">
<div class="row theme-product ">
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href="{{ url('category/electronics/tv/detail') }}"><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="{{ url('category/electronics/tv/detail') }}" class="text-decoration-none text-dark"><h6 class="card-title text-center">LED TV</h6></a>
        <h5 class="card-title text-center">Rs. 38999</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href="{{ url('category/electronics/tv/detail') }}"><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="{{ url('category/electronics/tv/detail') }}" class="text-decoration-none text-dark"><h6 class="card-title text-center">QLED TV</h6></a>
        <h5 class="card-title text-center">Rs. 48999</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href="{{ url('category/electronics/tv/detail') }}"><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="{{ url('category/electronics/tv/detail') }}" class="text-decoration-none text-dark"><h6 class="card-title text-center">OLED TV</h6></a>
        <h5 class="card-title text-center">Rs. 68999</h5>
        </div>
</div>
</div>
<div class="col-lg-3 mb-4">
        <div class="card" >
        <a href="{{ url('category/electronics/tv/detail') }}"><img class="card-img-top" src="{{ asset('assets/images/products/7.jpg') }}" alt="Card image cap"></a>
        <div class="card-body">
            <a href="{{ url('category/electronics/tv/detail') }}" class="text-decoration-none text-dark"><h6 class="card-title text-center">Samsung LED TV</h6></a>
        <h5 class="card-title text-center">Rs. 58999</h5>
        </div>
</div>
</div>


</div>

</div>
</div>
</section>
@endsection