<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="JivaJoy" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://jivajoy.id/" />
    <meta property="og:description" content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi" />
    <meta name="description" content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi">
    <title>JivaJoy Admin | Detail Produk</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">JivaJoy Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/profile-placeholder.png" alt="Foto Profil" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <div class="content">
        <div class="container mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/products">Data Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                </ol>
            </nav>


            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8;">Detail Produk</h1>
                <a href="/dashboard/products" class="btn btn-secondary btn-rounded">Kembali</a>
            </div>

            <!-- Form Input -->
            <div>
                <div class="mb-3 form-input d-flex flex-column">
                    <label for="productImage" class="form-label">Foto Produk</label>
                    <img src="{{ $product->foto_produk }}" class="img-product" alt="Gambar Produk" style="width:fit-content; height: 200px; object-fit:cover;">
                </div>

                <div class="mb-3 form-input">
                    <label for="productName" class="form-label">Varian Produk</label>
                    <input type="text" class="form-control" id="productName" name="product_name" value="Jivajoy {{ $product->varian }}" readonly>
                </div>


                <div class="mb-3 form-input">
                    <label for="productStock" class="form-label">Stok Produk</label>
                    <input type="number" class="form-control" id="productStock" name="product_stock" value="{{ $product->stok }}" readonly>
                </div>

                <div class="mb-3 form-input">
                    <label for="lastUpdate" class="form-label">Tanggal Update</label>
                    <input type="text" class="form-control" id="lastUpdate" name="last_update" value="{{ $product->updated_at }}" readonly>
                </div>
            </div>

            <br><br><br>
            <!-- Stock History Table -->
            <h3>Riwayat Stok</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Varian  Produk</th>
                        <th>Nama Admin</th>
                        <th>Jumlah Stok</th>
                        <th>Tanggal Update</th>
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

            <br><br><br>
            <!-- Stock Chart -->
            <h3>Grafik Stok</h3>
            <canvas id="stockChart"></canvas>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rpg8bXScjPpr8gr5Dngw2oyhQ/WK7yzXW3Y2tm49dD5aN2scMZt/sS5vTpFHZB1K" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('stockChart').getContext('2d');
        const stockData = {
            labels: ['2024-10-01', '2024-09-15', '2024-09-01'],
            datasets: [{
                label: 'Jumlah Stok',
                data: [150, 100, 120],
                borderColor: 'rgba(67, 128, 168, 1)',
                backgroundColor: 'rgba(67, 128, 168, 0.2)',
                borderWidth: 2,
            }]
        };

        const stockChart = new Chart(ctx, {
            type: 'line',
            data: stockData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>