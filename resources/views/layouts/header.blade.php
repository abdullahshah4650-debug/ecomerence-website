<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

</head>
  <body >
  <div class=" theme-navbar d-flex justify-content-between py-3 px-5 align-items-center">
    <a class="navbar-brand" href="/"> <h1 class="text-light">A.Shah Store</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div>
        <form class="d-flex" role="search">
            <div class="input-group">
        <input class="form-control form-control-sm" style="width:350px" type="search" placeholder="Search For Products" aria-label="Search"/>
        <button class="btn btn-light btn-sm text-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
</div>
<div>   
     <a href="#" class="text-decoration-none text-light">Become a Seller</a>
      <a href="#" class="btn theme-green-btn btn-sm"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
      <a href="#" class="btn theme-orange-btn btn-sm"><i class="fa-solid fa-user"></i>Login</a>
  </div>
    
  </div>
<!-- Category Nav -->

<nav class="navbar navbar-expand-lg theme-navbar-light ">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse justify-content-center"  id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-link active text-dark" aria-current="page" href="{{ url('category/electronics') }}">Mobile</a>
        <a class="nav-link text-dark" href="#">Fashion</a>
        <a class="nav-link text-dark" href="#">Electronics</a>
        <a class="nav-link text-dark" href="#">Furniture</a>
        <a class="nav-link text-dark" href="#">Grocery</a>
        <a class="nav-link text-dark" href="{{ url('category/electronics/tv') }}">Appliances</a>
      </div>
    </div>
  </div>
</nav>
  </body>
</html>