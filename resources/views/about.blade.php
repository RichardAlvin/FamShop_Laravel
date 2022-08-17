@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('css')
<link rel="stylesheet" href="css/about.css">
@endsection

@section('container')
<div class="row about">
    <div class="col-lg-6">
        <img src="test1.jpg" alt="" class="img-fluid" width="400px">
    </div>
    <div class="col-lg-5">
        <h3>AsanArizona - Toko Serba Ada</h3>
        <p>Toko berlokasi di Jambi tepatnya di daerah Sipin yang menjual berbagai kebutuhan rumah tangga.</p>
        <p>Barang yang ditawarkan sangat bervariasi, mulai dari elektronik, peralatan rumah tangga, karpet, lampu, alat bangunan, kosmetik, dan lainnya</p>
    </div>
</div>
<div class="row about">
    <div class="col-lg-6">
        <p>Toko AsanArizona juga menjual kue lebaran yang terdiri dari kue kering dan basah. Kue lebaran dapat mulai dipesan 1 bulan sebelum Imlek atau Idul Fitri.</p>
        <p>Toko AsanArizona juga menyediakan jasa memperbaiki alat elektronik yang dapat jaminan garansi 1 bulan.</p>
    </div>
    <div class="col-lg-5">
        <img src="test1.jpg" alt="" class="img-fluid">
    </div>
</div>
@endsection