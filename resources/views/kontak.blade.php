@extends('layouts.main')
@section('title', 'Kontak')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mb-5">
            <h2 class="fw-bold">Saluran Pengaduan</h2>
            <p class="text-muted">Laporkan tindak pidana korupsi melalui saluran resmi kami.</p>
        </div>
        
        <div class="col-lg-5 mb-4">
            <div class="bg-dark text-white p-4 rounded-4 shadow h-100">
                <h4 class="fw-bold">Gedung Merah Putih KPK</h4>
                <p class="mt-3">Jl. Kuningan Persada Kav. 4, Jakarta Selatan, 12950</p>
                <hr>
                <p><strong>Email:</strong> pengaduan@kpk.go.id</p>
                <p><strong>Call Center:</strong> 198</p>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow-sm p-4 rounded-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Subjek Laporan</label>
                        <input type="text" class="form-control" placeholder="Contoh: Dugaan Gratifikasi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Detail Pesan</label>
                        <textarea class="form-control" rows="4" placeholder="Tuliskan informasi Anda..."></textarea>
                    </div>
                    <button type="button" class="btn btn-kpk w-100 py-2">Kirim Aspirasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection