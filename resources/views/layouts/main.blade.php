<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Portal Edukasi Anti-Korupsi</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f7f6; }
        .navbar { background-color: #0d1b2a !important; } /* Warna Biru Navy Khas Instansi */
        .navbar-brand, .nav-link { color: white !important; }
        .nav-link:hover { color: #e0e1dd !important; }
        .footer { background: #0d1b2a; color: white; padding: 30px 0; margin-top: 50px; }
        .btn-kpk { background-color: #e63946; color: white; border: none; } /* Warna Merah Aksen */
        .btn-kpk:hover { background-color: #d62828; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">KPK EDUKASI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/service">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-5">
        @yield('content')
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">© 2026 Portal Edukasi Anti-Korupsi. Mari Berantas Korupsi mulai dari diri sendiri.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>