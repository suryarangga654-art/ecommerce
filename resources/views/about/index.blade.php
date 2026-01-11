@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<style>
.about-hero {
    background: url('{{ asset("assets/images/hijab.jpg") }}') center/cover no-repeat;
    padding: 100px 0;
    color: white;
    position: relative;
}
.about-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
}
.about-hero .content {
    position: relative;
    z-index: 2;
}

.icon-box {
    border-radius: 12px;
    transition: .3s;
}
.icon-box:hover {
    transform: translateY(-5px);
}
</style>

{{-- Hero Section --}}
<section class="about-hero text-center">
    <div class="content">
        <h1 class="fw-bold display-5 mb-3">Tentang Faizal Hijab Store</h1>
        <p class="lead">Elegan, Nyaman, dan Terjangkau untuk Setiap Muslimah.</p>
    </div>
</section>

{{-- About Story --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-4 text-center">Cerita Kami</h3>
        <p class="text-center mb-4">
            Faizal Hijab Store hadir dengan misi menyediakan hijab berkualitas, nyaman dipakai,
            dan tetap stylish untuk keseharian. Berdiri sejak 2026, kami terus berupaya menjadi 
            pilihan utama bagi para muslimah yang mencari produk hijab terbaik dengan harga yang ramah di kantong.
        </p>
    </div>
</section>

{{-- Visi Misi --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <h4 class="fw-bold mb-3"><i class="bi bi-bullseye"></i> Visi</h4>
                <p>
                    Menjadi brand hijab terpercaya yang menghadirkan kenyamanan, kualitas, dan gaya modern
                    untuk setiap pelanggan.
                </p>
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold mb-3"><i class="bi bi-layers"></i> Misi</h4>
                <ul>
                    <li>Menyediakan hijab berkualitas premium.</li>
                    <li>Menghadirkan model terbaru setiap bulan.</li>
                    <li>Memberikan pengalaman belanja yang mudah & cepat.</li>
                    <li>Mengutamakan pelayanan ramah dan amanah.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Keunggulan --}}
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Kenapa Memilih Kami?</h3>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white text-center icon-box">
                    <i class="bi bi-bag-check fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-3">Produk Berkualitas</h5>
                    <p>Bahan lembut, nyaman, dan awet dipakai.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white text-center icon-box">
                    <i class="bi bi-truck fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-3">Pengiriman Cepat</h5>
                    <p>Kami mengirim ke seluruh Indonesia.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white text-center icon-box">
                    <i class="bi bi-emoji-smile fs-1 text-primary"></i>
                    <h5 class="fw-bold mt-3">Pelayanan Ramah</h5>
                    <p>Kami siap membantu Anda kapan saja.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Kontak --}}
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h4 class="fw-bold mb-3">Hubungi Kami</h4>
        <p class="mb-1">Instagram: @faizalhijabstore</p>
        <p class="mb-1">WhatsApp: 0897-9136-118</p>
        <p>Email: faizalstore@gmail.com</p>
    </div>
</section>

@endsection
