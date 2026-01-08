@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <style>
    /* Container Utama untuk Hero */
    .hero-video-container {
        position: relative;
        height: 80vh; 
        min-height: 500px;
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        background: #222; /* Warna cadangan jika video gagal load */
    }

    /* Styling Video agar Full Screen di dalam Container */
    .bg-video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        transform: translate(-50%, -50%);
        object-fit: cover;
        opacity: 0.5; /* Gelapkan sedikit video agar teks lebih menonjol */
    }

    /* Konten di atas video */
    .hero-content {
        position: relative;
        z-index: 1;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    .img-floating {
        animation: float 5s ease-in-out infinite;
    }
</style>

<section class="hero-video-container">
    {{-- Video Background --}}
    <video autoplay muted loop playsinline class="bg-video">
        {{-- Pastikan nama file di bawah ini SAMA dengan yang kamu simpan di folder public --}}
        <source src="{{ asset('assets/images/video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white"> 
                <h1 class="display-4 fw-bold mb-3">
                    Koleksi Hijab Terbaik <br>untuk Anda
                </h1>
                <p class="lead mb-4">
                    Temukan produk hijab berkualitas dengan harga terbaik.
                    Gratis ongkir untuk pembelian pertama!
                </p>
                <a href="{{ route('catalog.index') }}" class="btn btn-light btn-lg px-5 shadow-lg fw-bold">
                    Mulai Belanja
                </a>
            </div>
            
            <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="{{ asset('assets/images/Logo.JPG') }}" 
                     class="img-fluid rounded shadow-lg img-floating" 
                     style="max-height:380px; object-fit: cover; border: 8px solid rgba(255,255,255,0.2);">
            </div>
        </div>
    </div>
</section>

    {{-- Kategori --}}
    <section class="py-5">
        <div class="container">
            <h5 class="fw-bold mb-4">Kategori Populer</h5>
            <div class="row g-3">
                @foreach($categories as $category)
                <div class="col-6 col-md-3 col-lg-2 text-center">
                    <a href="{{ route('catalog.index', ['category' => $category->slug]) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm p-3 h-100">
                            <img src="{{ $category->image_url }}" 
                                 class="rounded-circle mx-auto mb-2" 
                                 width="70" height="70" style="object-fit:cover">
                            <p class="small fw-bold mb-0">{{ $category->name }}</p>
                            <small class="text-muted">{{ $category->products_count }} Produk</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Produk Unggulan --}}
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Produk Unggulan</h5>
                <a href="{{ route('catalog.index') }}" class="text-decoration-none small text-muted">Lihat Semua →</a>
            </div>
            <div class="row g-3">
                @foreach($featuredProducts as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        @include('profile.partials.product-card', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Promo Sederhana --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card bg-dark text-white border-0 p-4 shadow-sm">
                        <h5 class="fw-bold">Flash Sale!</h5>
                        <p class="small mb-3">Diskon hingga 50% untuk produk pilihan.</p>
                        <a href="#" class="btn btn-outline-light btn-sm w-25">Cek</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 p-4 shadow-sm" style="background-color: #f2e9e4;">
                        <h5 class="fw-bold text-dark">Member Baru?</h5>
                        <p class="small mb-3 text-dark">Dapatkan voucher Rp 50.000 sekarang.</p>
                        <a href="{{ route('register') }}" class="btn btn-dark btn-sm w-25">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection