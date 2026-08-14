@extends('layouts.main')

@push('title')
    <title>Checkout</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
<h1 class="text-center text-secondary">
   <i class="fa-solid fa-cart-shopping"></i> Checkout
</h1>
</div>
{{-- Billing Info --}}


<section>
    <div class="container my-5">
        <h2>Billing Details</h2>
<div class="row">

    <div class="col-lg-12">
<form >
<div class="row my-3">
    <div class="col-lg-12 mb-3">
<select class="custom-select form-control form-control-lg custom-select-lg mb-3">
  <option selected>Select Your Country</option>
  <option value="1">Pakistan</option>
  <option value="2">Nepal</option>
  <option value="3">Australia</option>
  <option value="3">Usa</option>
  <option value="3">Uk</option>
  <option value="3">United Arab Emirates</option>
</select>
    </div>
<div class="col-lg-6 mb-3">
<input type="text" class="form-control " placeholder="Enter Your First Name " >
</div>
<div class="col-lg-6 mb-3">
<input type="text" class="form-control " placeholder="Enter Your Last Name " >
</div>
<div class="col-lg-6 mb-3">
<input type="tel" class="form-control " placeholder="Enter Your Phone No." >
</div>
<div class="col-lg-6 mb-3">
<input type="email" class="form-control " placeholder="Enter Your Email" >
</div>
<div class="col-lg-6 mb-3">
<input type="number" class="form-control " placeholder="Enter Your Postal Code" >
</div>
<div class="col-lg-6 mb-3">
<input type="number" class="form-control " placeholder="Exact Location or LandMark" >
</div>
<div class="col-lg-6 mb-3">
<select class="custom-select form-control  custom-select-lg mb-3">
  <option selected>Select Your Province</option>
  <option value="1">Punjab</option>
  <option value="2">Sindh</option>
  <option value="3">Balochistan</option>
  <option value="3">Khyber Pakhtunkhwa
</option>
</select>
</div>
<div class="col-lg-6 mb-3">
<select class="custom-select form-control  custom-select-lg mb-3">
  <option selected>Select Your City</option>
  <option value="1">Islamabad</option>
  <option value="2">Karachi</option>
  <option value="3">Lahore</option>
  <option value="3">Quetta</option>
  <option value="3">Rawalpind</option>
  <option value="3">Others</option>
</select></div>
<div class="col-lg-12 mb-3">
<textarea class="form-control" placeholder="Enter Your Full Address" rows="4"></textarea>
</div>
</div>
        </form>
    </div>

</div>
    </div>
</section>

<section>
<div class="container ">
    <h3>Your Orders</h3>
    <div class="row my-5 bg-light p-5">   
        <div class="col-lg-12">
           <table class="table">
                <thead>
                    <tr>
                    <th scope="col"> <h5>Product</h5> </th>
                    <th scope="col"> <h5>Price</h5> </th>
                    <th scope="col"> <h5>Quantity</h5> </th>
                    <th scope="col"> <h5>Total</h5> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>

                                <img class="card-img-top" src="{{ asset('assets/images/products/5.jpg') }}" style="width: 70px;" alt="Card image cap">
                            </div>
                            <div>
                        <h5 class="p-3">Camera</h5>

                            </div>
                            
                        </div>
                    </th>
                    <td>Rs. 4000</td>
                    <td> <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <span class="mx-2">01</span>
        </div>
    </div></td>
                    <td>Rs. 4000</td>
                    </tr>
                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>

                                <img class="card-img-top" src="{{ asset('assets/images/products/9.jpg') }}" style="width: 70px;" alt="Card image cap">
                            </div>
                            <div>
                        <h5 class="p-3">Hand Bag</h5>

                            </div>
                            
                        </div>
                    </th>
                    <td>Rs. 2500</td>
                    <td> <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <span class="mx-2">01</span>
        </div>
    </div></td>
                    <td>Rs. 2500</td>
                    </tr>
                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>

                                <img class="card-img-top" src="{{ asset('assets/images/products/2.jpg') }}" style="width: 70px;" alt="Card image cap">
                            </div>
                            <div>
                        <h5 class="p-3">Watch</h5>

                            </div>
                            
                        </div>
                    </th>
                    <td>Rs. 2000</td>
                    <td> <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <span class="mx-2">02</span>
        </div>
    </div></td>
                    <td>Rs. 2000</td>
                    </tr>
                    
                   
                </tbody>
                </table>
        </div>
       
    </div>
</div>
</section>

{{-- Payments --}}
<section>
<div class="container">
  <div class="row"></div>
  <div class="col-lg-5">
    <div class="form-check">

        <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
Easypaisa / JazzCash      </label>

    </div>
    <div class="form-check">

        <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            Credit / Debit Cards
        </label>

    </div>
    <div class="form-check">

        <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
           Cash On Delivery
        </label>

    </div>
  </div>
</div>
</section>






@endsection