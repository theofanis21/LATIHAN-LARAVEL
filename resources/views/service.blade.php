@extends('layouts.main')
@section('title', 'Service')
@section('content')
<div class="container text-center">
    <h2 class="fw-bold mb-5">Tugas Utama KPK</h2>
    <div class="row g-4 text-start">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <h5 class="fw-bold text-danger">Pencegahan</h5>
                <p class="text-muted small">Melakukan tindakan-tindakan pencegahan korupsi melalui perbaikan sistem dan edukasi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4 text-white bg-dark">
                <h5 class="fw-bold text-warning">Penindakan</h5>
                <p class="small">Melakukan penyelidikan, penyidikan, dan penuntutan terhadap tindak pidana korupsi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
                <h5 class="fw-bold text-danger">Monitoring</h5>
                <p class="text-muted small">Melakukan kajian sistem pengelolaan administrasi di semua lembaga negara.</p>
            </div>
        </div>
    </div>
</div>
@endsection