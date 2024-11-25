<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Link ke Google Font (Poppins) untuk tipografi yang lebih modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Link ke Bootstrap dan Font Awesome untuk ikon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f7f7;
            height: 100vh; /* Mengatur tinggi body untuk mengambil seluruh tinggi layar */
            display: flex;
            justify-content: center; /* Memusatkan form secara horizontal */
            align-items: center; /* Memusatkan form secara vertikal */
        }

        .signup-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Maksimal lebar card */
        }

        .signup-card h3 {
            color: #dc3545;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 25px;
            box-shadow: none;
            padding-left: 40px; /* Memberikan ruang untuk ikon di sisi kiri */
            padding-right: 40px; /* Memberikan ruang untuk ikon di sisi kanan */
            position: relative;
        }

        .btn-primary {
            background-color: #dc3545;
            border: none;
            border-radius: 25px;
            padding: 12px 25px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #bb2d3b;
            transform: scale(1.05);
        }

        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .form-text {
            font-size: 0.875rem;
            color: #888;
        }

        /* Posisi ikon di dalam input */
        .input-icon-left {
            position: absolute;
            left: 15px; /* Posisi ikon dari kiri */
            top: 50%; /* Posisikan di tengah vertikal */
            transform: translateY(-50%); /* Posisikan ikon di tengah */
            color: #888;
            pointer-events: none; /* Agar ikon tidak menghalangi interaksi dengan input */
        }

        .form-group {
            position: relative;
        }

        .alert-danger ul {
            list-style-type: none;
            padding-left: 20px;
        }

        .text-center a {
            color: #dc3545;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card signup-card">
                    <h3>Signup</h3>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('storesignup') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Enter your full name">
                                <i class="fas fa-user input-icon-left"></i>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                                <i class="fas fa-envelope input-icon-left"></i>
                            </div>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" required placeholder="Enter your password">
                                <i class="fas fa-lock input-icon-left"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </form>

                    <!-- Link ke halaman Sign In -->
                    <p class="text-center mt-3">
                        Sudah punya akun? <a href="{{ route('signin') }}" class="text-decoration-none text-danger">Masuk</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
