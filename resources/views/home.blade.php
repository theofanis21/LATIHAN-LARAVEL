@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row align-items-center py-5">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-3">Kenali <span class="text-danger">Korupsi</span>, Lawan dengan <span class="text-primary">Integritas</span></h1>
            <p class="lead text-muted mb-4">Selamat datang di portal informasi Komisi Pemberantasan Korupsi. Bersama-sama kita wujudkan Indonesia yang bebas dari korupsi.</p>
            <a href="/about" class="btn btn-dark btn-lg px-5 shadow">Pelajari Profil</a>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0 text-center">
            <img src="https://illustrations.popsy.co/amber/work-from-home.svg" class="img-fluid" style="max-height: 400px;">
        </div>
    </div>
</div>
@endsection