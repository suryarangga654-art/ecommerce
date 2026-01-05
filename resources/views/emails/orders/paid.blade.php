{{-- resources/views/emails/orders/paid.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Pesanan Diterima</title>
    <!-- Bootstrap 5 CDN (hanya untuk preview lokal, email client sering tidak mendukung external CSS. Gunakan inline styles untuk produksi) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fallback inline-friendly styles untuk email */
        body { font-family: Arial, sans-serif; }
        .btn-primary-custom {
            background-color: #0d6efd;
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 0.375rem;
            display: inline-block;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-body p-5">
                <h2 class="mb-4">Halo, {{ $order->user->name }}</h2>
                <p class="lead mb-4">
                    Terima kasih! Pembayaran untuk pesanan <strong>#{{ $order->order_number }}</strong> telah kami terima.<br>
                    Kami sedang memproses pesanan Anda.
                </p>

                <div class="table-responsive mb-4">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Produk</th>
                                <th class="text-center">Qty</th>
                                <th class="text-end">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                    <td>{{ $item->product_name }}</td>
                                    <td class="text-center">{{ $item->quantity }}</td>
                                    <td class="text-end">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                            <tr class="table-primary fw-bold">
                                <td colspan="2">Total</td>
                                <td class="text-end">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mb-4">
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-primary btn-lg">
                        Lihat Detail Pesanan
                    </a>
                </div>

                <p class="text-muted">
                    Jika ada pertanyaan, silakan balas email ini.
                </p>

                <p class="mt-5">
                    Salam,<br>
                    <strong>{{ config('app.name') }}</strong>
                </p>
            </div>
        </div>
    </div>
</body>
</html>