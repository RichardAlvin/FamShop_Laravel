@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
<link href="/css/cardScroll.css" rel="stylesheet">
@endsection

@section('container')

<div class="row">
    <div class="col-lg-6" style="background-color: red;">
        <img src="/services.jpg" class="img-fluid"/>
    </div>
    <div class="col-lg-6" style="background-color: blue;">
        <img src="/naster.jpg" class="img-fluid"/>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="row" style="background-color: yellow">
            <img src="/perabotan.jpg" class="img-fluid"/>
        </div>
        <div class="row" style="background-color: black">
            <img src="/karpet.jpg" class="img-fluid"/>
        </div>
    </div>
    <div class="col-lg-4">
        <img src="/listrik.jpg" class="img-fluid"/>
        {{-- <h1>Listrik</h1> --}}
    </div>
    <div class="col-lg-4">
        <div class="row" style="background-color: yellow">
            <img src="/perkakas.jpg" class="img-fluid"/>
        </div>
        <div class="row" style="background-color: black">
            <img src="/kosmetik.jpg" class="img-fluid"/>
        </div>
    </div>
</div>

<div style="margin-top: 20px;">
    <h2 class="text-center">Best Seller</h2>
    <ul class="cards">
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="card-link">Learn More</a>
        </div>
      </li>
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="card-link">Learn More</a>
        </div>
      </li>
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="card-link">Learn More</a>
        </div>
      </li>
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="card-link">Learn More</a>
        </div>
      </li>
      <li class="card">
        <img src="/listrik.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="card-link">Learn More</a>
        </div>
      </li>
    </ul>
  </div>
@endsection