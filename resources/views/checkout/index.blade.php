{{-- resources/views/checkout/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="display-5 fw-bold mb-4">Checkout</h1>

        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row g-4">

                {{-- Form Alamat --}}
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 fw-semibold mb-4">Informasi Pengiriman</h2>

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="name" class="form-label">Nama Penerima</label>
                                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}"
                                           class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="text" name="phone" id="phone"
                                           class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Alamat Lengkap</label>
                                    <textarea name="address" id="address" rows="3"
                                              class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Order Summary --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm sticky-top" style="top: 1rem;">
                        <div class="card-body">
                            <h2 class="h5 fw-semibold mb-4">Ringkasan Pesanan</h2>

                            <div class="overflow-auto mb-4" style="max-height: 240px;">
                                @foreach($cart->items as $item)
                                    <div class="d-flex justify-content-between">
                                        <span>{{ $item->product->name }} x {{ $item->quantity }}</span>
                                        <span class="fw-medium">{{ number_format($item->subtotal, 0, ',', '.') }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between fs-5 fw-bold">
                                <span>Total</span>
                                <span>Rp {{ number_format($cart->items->sum('subtotal'), 0, ',', '.') }}</span>
                            </div>

                            <button type="submit"
                                    class="btn btn-primary w-100 mt-4 py-3 fw-semibold">
                                Buat Pesanan
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection