@extends('master.layout')

@section('title')
    Profile
@endsection

@section('content')
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center">  <!-- Membuat container vertikal penuh dan center -->
    <div class="row justify-content-center w-100">
        <!-- Profile Information Section -->
        <div class="col-md-8 col-lg-6 text-center">
            <!-- Profile Card -->
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body">
                    <!-- Profile Image -->
                    <div class="profile-img mb-4">
                        <!-- Pastikan gambar default-profile.jpg ada di folder public/images -->
                        <img src="{{ asset('sugiri-removebg-preview.png') }}" class="rounded-circle" alt="Profile Picture" width="150" height="150">
                    </div>
                    
                    <!-- Name and Bio -->
                    <h3 class="text-primary mb-2">H. Muzaky A.m</h3>
                    <p class="text-muted mb-3">Web Developer | Tech Enthusiast</p>

                    <!-- About Me -->
                    <div class="mb-4">
                        <h5 class="text-dark">Tentang Kami</h5>
                        <p class="text-muted">Kami adalah tim pengembang perangkat lunak yang penuh semangat, terdiri dari para profesional yang berfokus pada pembuatan solusi teknologi inovatif untuk bisnis dan individu. Dengan beragam keahlian di berbagai bidang, kami berkomitmen untuk membantu klien kami mencapai potensi maksimal mereka melalui aplikasi web, pengembangan perangkat lunak, dan desain digital.</p>
                    </div>

                    <!-- Contact Info -->
                    <div class="mb-4">
                        <h5 class="text-dark">Contact Information</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-envelope text-primary"></i> muzk@gmail.com</li>
                            <li><i class="fas fa-phone-alt text-success"></i> +6285-917-686-3450</li>
                            <li><i class="fas fa-map-marker-alt text-danger"></i> Ponorogo, Jawa Timur</li>
                        </ul>
                    </div>

                    <!-- Social Media Links -->
                    <div class="social-icons mb-3">
                        <a href="#" class="btn btn-outline-primary btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
            </div>
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

    /* Profile Card */
    .card {
        background-color: #fff;
        border-radius: 15px;
        padding: 30px;
    }

    .profile-img {
        margin-bottom: 20px;
    }

    .card-body {
        padding: 30px;
    }

    .card h3 {
        font-size: 2rem;
        font-weight: 600;
    }

    .card p {
        font-size: 1rem;
    }

    /* Social Media Icons */
    .social-icons a {
        font-size: 1.5rem;
        width: 50px;
        height: 50px;
        line-height: 45px;
        border-radius: 50%;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    }

    .social-icons a:hover {
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Button Style */
    .btn-primary {
        background-color: #dc3545;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        font-size: 18px;
        border-radius: 25px;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #bb2d3b;
        transform: scale(1.05);
    }

    /* Margin and Padding */
    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-3 {
        margin-top: 1.5rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .col-md-8 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .social-icons a {
            font-size: 1.25rem;
        }
    }
</style>
@endsection
