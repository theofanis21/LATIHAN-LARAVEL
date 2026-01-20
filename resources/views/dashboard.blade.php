<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fc; }
        .navbar { background: white !important; box-shadow: 0 2px 15px rgba(0,0,0,0.05); }
        .profile-card { border: none; border-radius: 24px; background: white; box-shadow: 0 4px 25px rgba(0,0,0,0.05); overflow: hidden; }
        .profile-header { background: linear-gradient(45deg, #4e73df, #224abe); height: 120px; }
        .profile-img-container { margin-top: -60px; margin-bottom: 20px; }
        .profile-img { width: 120px; height: 120px; border: 6px solid white; object-fit: cover; border-radius: 35px; }
        .data-item { padding: 15px; border-bottom: 1px solid #f1f3f9; }
        .data-item:last-child { border: none; }
        .label { font-size: 0.8rem; color: #858796; font-weight: 600; text-transform: uppercase; }
        .value { font-size: 1rem; color: #3a3b45; font-weight: 600; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
        <span class="navbar-brand fw-bold text-primary">SIM Mahasiswa</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm rounded-pill px-4">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="profile-card">
                <div class="profile-header"></div>
                <div class="text-center profile-img-container">
                    @if(Auth::user()->foto)
                        <img src="{{ asset('storage/' . Auth::user()->foto) }}" class="profile-img shadow">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&size=120&background=4e73df&color=fff" class="profile-img shadow">
                    @endif
                </div>
                <div class="p-4 pt-0">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold mb-0 text-dark">{{ Auth::user()->name }}</h3>
                        <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">Mahasiswa Aktif</span>
                    </div>

                    <div class="row g-0">
                        <div class="col-6 data-item">
                            <div class="label">NIM</div>
                            <div class="value">{{ Auth::user()->nim }}</div>
                        </div>
                        <div class="col-6 data-item">
                            <div class="label">Username</div>
                            <div class="value">{{ Auth::user()->username }}</div>
                        </div>
                        <div class="col-12 data-item">
                            <div class="label">Email</div>
                            <div class="value">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="col-12 data-item">
                            <div class="label">Tempat, Tanggal Lahir</div>
                            <div class="value">{{ Auth::user()->tempat_lahir }}, {{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->format('d M Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">E-KTM Digital &bull; 2026</p>
        </div>
    </div>
</div>

</body>
</html>