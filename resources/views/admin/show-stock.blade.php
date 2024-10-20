<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mt-4">
        <!-- Heading: Informasi Produk -->
        <div class="row mb-4">
            <div class="col-md-3">
                <!-- Gambar Produk -->
                <img src="{{ $product->foto_produk }}" alt="{{ $product->varian }}" class="img-fluid" style="height: 100px;">
            </div>
            <div class="col-md-9">
                <!-- Nama Varian, Total Stok, Last Update -->
                <h2>Varian: {{ $product->varian }}</h2>
                <p>Total Stok: {{ $product->stok }}</p>
                <p>Last Update: {{ $product->updated_at }}</p>
            </div>
        </div>

        <!-- Tabel Riwayat Pengelolaan Stok -->
        <h4>Riwayat Pengelolaan Stok</h4>
        @if(session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Varian</th>
                    <th>Admin yang Menambahkan</th>
                    <th>Jumlah (Qty)</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product->stocks->sortByDesc('created_at') as $index => $stock)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->varian }}</td>
                    <td>{{ $stock->admin->nama }}</td>
                    <td>{{ $stock->qty }}</td>
                    <td>{{ $stock->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol kembali -->
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Produk</a>
    </div>

</body>

</html>