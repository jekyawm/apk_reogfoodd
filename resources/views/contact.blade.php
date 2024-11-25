@extends('master.layout')

@section('title')
    Contact
@endsection

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">  
    <div class="row w-100">
        <!-- Contact Information Section -->
        <div class="col-md-6 text-center mb-4">
            <h2 class="text-primary mb-3">Contact Us</h2>
            <p class="lead text-muted mb-4">Hubungi Kami Di Bawah Ini</p>
            <div class="social-icons mb-3">
                <a href="#" class="social-icon btn btn-outline-primary btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon btn btn-outline-success btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" class="social-icon btn btn-outline-danger btn-sm mx-2 rounded-circle" data-bs-toggle="tooltip" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg p-4 rounded-lg">
                <h4 class="text-center text-primary mb-4">Send Us a Message</h4>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name">Nama Anda</label>
                                <input type="text" class="form-control border-0 shadow-sm" id="name" placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control border-0 shadow-sm" id="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message">Mau Pesan Apa??</label>
                        <textarea class="form-control border-0 shadow-sm" id="message" rows="4" placeholder="Write your message here" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Kirim Pesan</button>
                </form>
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

    /* Container flex untuk memastikan konten berada di tengah */
    .container-fluid.min-vh-100 {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* Contact Information */
    h2.text-primary {
        font-weight: 600;
        font-size: 2rem;
    }

    .social-icons a {
        font-size: 1.75rem;
        width: 60px;  /* Ukuran ikon yang lebih besar */
        height: 60px;
        line-height: 60px; /* Menyesuaikan tinggi dengan diameter */
        border-radius: 50%;  /* Membuat ikon menjadi bulat */
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease, background-color 0.3s ease;
    }

    /* Hover effect untuk ikon media sosial */
    .social-icons a:hover {
        transform: scale(1.2); /* Menambah ukuran ikon ketika dihover */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        background-color: rgba(0, 0, 0, 0.05); /* Efek latar belakang saat hover */
    }

    .social-icon {
        display: inline-flex; /* Mengatur ikon menjadi fleksibel */
        justify-content: center;
        align-items: center;
        border: 2px solid transparent;
        padding: 10px;
        margin: 5px;
    }

    /* Styling untuk card form */
    .card {
        background-color: #fff;
        border-radius: 15px;
        padding: 30px;
    }

    .card h4 {
        font-size: 1.75rem;
        color: #dc3545;
        font-weight: 600;
    }

    /* Form Elements */
    .form-group input,
    .form-group textarea {
        border-radius: 25px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 15px 20px;
        font-size: 1rem;
        transition: box-shadow 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        border-color: #007bff;
        outline: none;
    }

    /* Tombol Kirim */
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

    /* Margin dan Spacing */
    .mb-3 {
        margin-bottom: 1.5rem;
    }

    .mt-3 {
        margin-top: 1.5rem;
    }

    .mt-5 {
        margin-top: 5rem;
    }

    /* Mengurangi jarak antara Contact Us dan Send Us a Message */
    .mb-4 {
        margin-bottom: 1rem; /* Menyesuaikan margin agar lebih rapat */
    }

    /* Responsive */
    @media (max-width: 768px) {
        .social-icons a {
            font-size: 1.5rem; /* Ukuran ikon lebih kecil pada perangkat mobile */
        }

        .col-md-6 {
            margin-bottom: 20px;
        }

        .card {
            padding: 20px;
        }
    }
</style>
@endsection
