@extends('master.layout')

@section('title')
    Tentang Kami
@endsection

@section('content')
<div class="container mt-5 pt-5"> <!-- Padding dan margin top tambahan -->
    <div class="row justify-content-center">
        <!-- About Us Section -->
        <div class="col-md-8 col-lg-6 text-center">
            <h2 class="text-primary mb-4">Tentang Kami</h2>
            <p class="lead text-muted mb-5">Kami adalah tim yang berfokus pada pengembangan solusi teknologi inovatif untuk bisnis dan individu. Dengan berbagai keahlian, kami berkomitmen untuk membantu klien kami mencapai potensi maksimal mereka melalui aplikasi web, pengembangan perangkat lunak, dan desain digital.</p>
            
            <!-- Our Vision and Mission -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h4 class="text-dark">Visi Kami</h4>
                    <p class="text-muted">Menjadi pemimpin dalam menyediakan solusi teknologi yang inovatif dan bernilai tinggi bagi bisnis dan masyarakat.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h4 class="text-dark">Misi Kami</h4>
                    <p class="text-muted">Membantu klien kami mengoptimalkan potensi mereka melalui solusi perangkat lunak yang efisien, andal, dan mudah digunakan.</p>
                </div>
            </div>
            
            <!-- Team Section -->
            <h3 class="text-primary mb-4">Tim Kami</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-lg mb-3">
                        <img src="{{ asset('images/team1.jpg') }}" class="card-img-top rounded-circle" alt="Team Member 1" width="150" height="150">
                        <div class="card-body text-center">
                            <h5 class="card-title">Zaky</h5>
                            <p class="card-text text-muted">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-lg mb-3">
                        <img src="{{ asset('images/team2.jpg') }}" class="card-img-top rounded-circle" alt="Team Member 2" width="150" height="150">
                        <div class="card-body text-center">
                            <h5 class="card-title">Zaky</h5>
                            <p class="card-text text-muted">Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-lg mb-3">
                        <img src="{{ asset('images/team3.jpg') }}" class="card-img-top rounded-circle" alt="Team Member 3" width="150" height="150">
                        <div class="card-body text-center">
                            <h5 class="card-title">Zaky</h5>
                            <p class="card-text text-muted">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Us Section -->
            <h3 class="text-primary mb-4">Hubungi Kami</h3>
            <p class="text-muted">Jika Anda ingin bekerja dengan kami atau memiliki pertanyaan, jangan ragu untuk menghubungi kami. Kami siap membantu Anda!</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Hubungi Kami</a>
        </div>
    </div>
</div>

{{-- CSS --}}
<style>
    /* Styling Umum */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }

    /* About Us */
    h2.text-primary {
        font-size: 2.5rem;
        font-weight: 600;
    }

    .lead {
        font-size: 1.25rem;
    }

    .text-muted {
        font-size: 1rem;
    }

    /* Team Card */
    .card {
        background-color: #fff;
        border-radius: 15px;
        padding: 20px;
    }

    .card-img-top {
        margin: 0 auto;
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-weight: 600;
    }

    .card-text {
        font-size: 0.9rem;
    }

    /* Button Style */
    .btn-primary {
        background-color: #dc3545;
        border: none;
        padding: 14px 30px;
        font-weight: 600;
        font-size: 18px;
        border-radius: 25px;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #bb2d3b;
        transform: scale(1.05);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .col-md-6 {
            margin-bottom: 30px;
        }
        
        .card-img-top {
            width: 120px;
            height: 120px;
        }
        
        .btn-primary {
            padding: 12px 25px;
            font-size: 16px;
        }
    }
</style>

@endsection
