<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>

    <!-- Link ke Google Font (Poppins) untuk tipografi yang lebih modern -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Link ke Bootstrap dan Font Awesome untuk ikon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f7f7;
            height: 100vh; /* Pastikan body mengambil seluruh tinggi layar */
            display: flex;
            justify-content: center; /* Menempatkan konten di tengah secara horizontal */
            align-items: center; /* Menempatkan konten di tengah secara vertikal */
        }

        .signin-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Maksimal lebar 400px */
        }

        .signin-card h3 {
            color: #dc3545;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 25px;
            box-shadow: none;
            padding-right: 40px; /* Ruang untuk ikon */
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

        /* Posisi ikon di dalam input text */
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50px;
            transform: translateY(-50%); /* Posisikan ikon di tengah secara vertikal */
            color: #888;
            pointer-events: none; /* Prevents icon from blocking clicks */
        }

        .form-group {
            position: relative;
        }

        .alert-danger ul {
            list-style-type: none;
            padding-left: 20px;
        }

        /* Pastikan input tidak memiliki border yang tumpang tindih dengan ikon */
        .form-group .form-control {
            padding-right: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card signin-card">
                    <h3>Signin</h3>

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

                    <form method="POST" action="{{ route('storeSignin') }}">
                        @csrf
                        <div class="mb-3 form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required placeholder="Enter your email">
                            <i class="fas fa-envelope input-icon"></i>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required placeholder="Enter your password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('signup') }}" class="text-decoration-none" style="color: #dc3545;">Don't have an account? Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
