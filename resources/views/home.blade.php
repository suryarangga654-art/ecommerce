@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <style>
        /* Animasi naik turun pelan */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); } /* Naik 20px */
            100% { transform: translateY(0px); }
        }

        .img-floating {
            animation: float 5s ease-in-out infinite; /* 5 detik supaya pelan */
        }
    </style>

    {{-- Hero Section --}}
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-dark mb-3">
                        Koleksi Hijab Terbaik <br>untuk Anda
                    </h1>
                    <p class="lead text-muted mb-4">
                        Temukan produk hijab berkualitas dengan harga terbaik.
                        Gratis ongkir untuk pembelian pertama!
                    </p>
                    <a href="{{ route('catalog.index') }}" class="btn btn-dark btn-lg px-4">
                        Mulai Belanja
                    </a>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    {{-- Tambahkan class img-floating di bawah ini --}}
                    <img src="{{ asset('assets/images/hijab.JPG') }}" 
                         class="img-fluid rounded shadow-sm img-floating" 
                         style="max-height:350px; object-fit: cover; border: 5px solid white;">
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