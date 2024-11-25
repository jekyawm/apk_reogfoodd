@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
<head>
    <!-- Memuat font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Memuat Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Animasi Fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Animasi Slide-up */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Memberikan animasi pada elemen post */
        .post-card {
            animation: fadeIn 1s ease-in-out;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .post-card:hover {
            transform: translateY(-5px);  /* Mengangkat card sedikit */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);  /* Menambahkan bayangan */
        }

        .post-card-slide {
            animation: slideUp 1s ease-out;
            margin-bottom: 30px;
        }

        /* Styling untuk ikon sosial */
        .social-icons a {
            font-size: 22px;
            width: 50px;  /* Menentukan lebar ikon */
            height: 50px; /* Menentukan tinggi ikon */
            margin: 0 3px;
            padding: 12px;  /* Padding dalam untuk menyeimbangkan ukuran */
            border-radius: 50%;  /* Membuatnya bundar */
            display: inline-block;
            text-align: center;
            line-height: 26px; /* Menyelaraskan teks dan ikon di tengah */
            transition: all 0.3s ease;
            color: #fff;
        }

        .social-icons a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-icon {
            background-color: #25D366;
        }

        .phone-icon {
            background-color: #007bff;
        }

        /* Styling untuk gambar di card */
        .card-img-top {
            max-height: 250px;
            object-fit: cover;
            width: 100%;
        }

        /* Memastikan font Poppins diterapkan pada teks */
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2.scroll-news {
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            animation: none; 
            font-weight: 600;
        }
        
        /* Styling carousel */
        #carouselExampleIndicators {
            margin-bottom: 30px;
        }

        #carouselExampleIndicators .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Teks dan Spacing untuk header */
        .header-content {
            text-align: center;
            padding-bottom: 40px;
        }
    </style>
</head>
<div class="container-fluid">]
    
</div>
<div class="container" style="padding-top: 150px;">
    <div class="row">
        <div class="col-md-12 header-content">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Teks dengan animasi scroll dari kiri ke kanan -->
            <h2 class="scroll-news">Selamat Datang di web ReogFood</h2>
        </div>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="slide2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Menampilkan daftar postingan -->
    <div class="row mt-4">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4 post-card-slide">
            <div class="card post-card">
                @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}"/>
                @else
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image"/>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    
                    <!-- Ikon WhatsApp dan Telepon -->
                    <div class="social-icons mt-2">
                        <!-- WhatsApp Icon -->
                        <a href="https://wa.me/your_phone_number" class="whatsapp-icon" target="_blank" title="Chat on WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        
                        <!-- Phone Icon -->
                        <a href="tel:+your_phone_number" class="phone-icon" title="Call Us">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
