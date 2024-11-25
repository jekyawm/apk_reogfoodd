<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Ikon</title>

    <!-- Import Font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins untuk seluruh halaman */
            font-weight: 500;
        }

        .navbar {
            padding: 0.5rem 1rem; /* Mengurangi padding navbar */
        }

        .navbar .form-inline {
            display: flex;
            align-items: center;
        }

        /* Mengurangi ukuran lebar kolom pencarian */
        .navbar .form-control {
            width: 150px; /* Lebar pencarian lebih kecil */
            margin-right: 8px;
            font-size: 0.9rem; /* Ukuran font lebih kecil */
        }

        /* Mengurangi ukuran font dan padding pada item navbar */
        .navbar .navbar-nav .nav-link {
            font-size: 0.875rem; /* Ukuran font lebih kecil untuk link */
            padding: 0.5rem 0.8rem; /* Padding lebih kecil pada item */
            color: #fff !important; /* Memastikan teks link navbar berwarna putih */
            font-weight: 500; /* Menyesuaikan font weight navbar */
        }

        /* Menambahkan efek hover pada item navbar */
        .navbar .navbar-nav .nav-link:hover {
            color: #f8f9fa !important; /* Warna putih menyala saat hover */
        }

        /* Styling untuk tombol Sign Up, Sign In dan Logout */
        .navbar .btn-outline-light {
            border: 2px solid #fff;
            color: #fff;
            background-color: transparent;
            padding: 5px 12px; /* Padding lebih kecil */
            border-radius: 5px;
            font-size: 0.875rem; /* Ukuran font lebih kecil */
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            height: 35px; /* Tinggi tombol lebih kecil */
            transition: all 0.3s ease;
        }

        /* Efek hover pada tombol */
        .navbar .btn-outline-light:hover {
            background-color: #fff;
            color: #dc3545;
            transform: scale(1.05); /* Sedikit lebih besar saat hover */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
        }

        /* Menyesuaikan ukuran logo */
        .navbar .navbar-brand img {
            height: 70px; /* Ukuran logo lebih kecil */
            width: auto;
        }

        /* Menyesuaikan tombol toggler navbar */
        .navbar-toggler {
            padding: 0.25rem 0.5rem;
            font-size: 1rem;
        }

        /* Mengurangi ukuran ikon pada tombol */
        .navbar .btn-outline-light i {
            font-size: 16px; /* Ukuran ikon lebih kecil */
        }

        /* Navbar yang lebih kompak saat collapsed */
        .navbar-collapse {
            font-size: 0.875rem; /* Ukuran font lebih kecil pada navbar collapse */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo" height="70" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Data Pengguna</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center">
                <!-- Form Pencarian -->
                <form class="form-inline" action="{{ route('search') }}" method="GET">
                    <input class="form-control" type="search" name="query" placeholder="Cari" aria-label="Search">
                </form>

                @if (!Auth::check())
                    <!-- Tombol Daftar dengan Ikon -->
                    <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">
                        <i class="fas fa-user-plus"></i> Daftar
                    </a>
                    <!-- Tombol Masuk dengan Ikon -->
                    <a href="{{ route('signin') }}" class="btn btn-outline-light">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </a>
                @else
                    <!-- Tombol Keluar dengan Ikon -->
                    <a href="{{ route('logout') }}" class="btn btn-outline-light">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
