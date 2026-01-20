<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Sistem Informasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section { height: 100vh; display: flex; align-items: center; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/random/1920x1080/?university'); background-size: cover; color: white; }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold">Sistem Informasi Mahasiswa</h1>
            <p class="lead mb-4">Aplikasi Simple Dashboard untuk manajemen data profil mahasiswa berbasis Laravel & Bootstrap.</p>
            
            @if (Route::has('login'))
                <div class="d-flex justify-content-center gap-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Buka Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-lg px-5">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-5">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>