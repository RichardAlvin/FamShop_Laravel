@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
<link href="/css/home.css" rel="stylesheet">
<link href="/css/cardScroll.css" rel="stylesheet">
@endsection

@section('container')
<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" style="margin-bottom:50px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000" style="height:60vh; min-height:100px">
      <img src="test3.jpg" class="d-block" alt="..." style="width:100%; height:100%">
      <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,0.5)">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000" style="height:60vh; min-height:100px">
      <img src="/test2.jpg" class="d-block w-100" alt="..." style="width:100%; height:100%">
      <div class="carousel-caption d-none d-md-block" style="background-color:rgba(0,0,0,0.5)">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h3 class="text-center">Category Products</h3>
<div class="row justify-content-around">
      <div class="box col-lg-6">
        <img src="/services.jpg" class="img-fluid image" style="padding:10px; border:1px solid black;"/>
        <div class="overlay" style="background-color:#6c89f5 ">
          <div class="text">Services</div>
        </div>
      </div>
      <div class="box col-lg-6">
        <img src="/naster.jpg" class="img-fluid image" style="padding:10px; border:1px solid black;"/>
        <div class="overlay" style="background-color: #6cf5cc;">
          <div class="text">Cakes</div>
        </div>
      </div>
</div>
<div class="row justify-content-around">
    <div class="col-lg-4">
        <div class="row box">
          <img src="/perabotan.jpg" class="img-fluid image" style="padding:10px; border:1px solid black;"/>
          <div class="overlay" style="background-color: #e69749;">
            <div class="text">Perabotan</div>
          </div>
        </div>
        <div class="row box">
          <img src="/karpet.jpg" class="img-fluid image" style="padding:10px; border:1px solid black;"/>
          <div class="overlay" style="background-color: #f54e7b;">
            <div class="text">Karpet</div>
          </div>
        </div>
    </div>
    <div class="col-lg-4 box">
        <img src="/listrik.jpg" class="img-fluid image" style="padding:10px; border:1px solid black;"/>
        <div class="overlay" style="background-color: #a51be0;">
          <div class="text">Listrik</div>
        </div>
    </div>
    <div class="col-lg-4">
      <div class="row box">
        <img src="/perkakas.jpg" class="img-fluid" style="padding:10px; border:1px solid black; width:100%;"/>
        <div class="overlay" style="background-color: #afc204;">
          <div class="text">Perkakas</div>
        </div>
      </div>
      <div class="row box">
        <img src="/kosmetik.jpg" class="img-fluid" style="padding:10px; border:1px solid black; width:100%;"/>
        <div class="overlay" style="background-color: #e009dd;">
          <div class="text">Kosmetik</div>
        </div>
      </div>
    </div>
</div>

<div style="margin-top: 20px;">
    <h2 class="text-center">Best Seller</h2>
    <ul class="cards">
      @foreach ($bestsellers as $bestseller)
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $bestseller->name }}</h5>
          <p class="card-text">{{ $bestseller->stock }}</p>
          <p class="card-text">{{ $bestseller->price }}</p>
          <a href="#" class="card-link">Go to Product</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
@endsection