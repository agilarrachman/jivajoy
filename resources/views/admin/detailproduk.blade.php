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
    <link rel="stylesheet" href="/css/popup.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">

<body>

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
                            <img src="{{ asset('storage/' . auth()->user()->foto_profil) }}" alt="Foto Profil" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            {{ auth()->user()->nama }}
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Riwayat Stok</h3>
                <button class="btn btn-primary btn-rounded" id="buttonPrimary">
                    <a href="/dashboard/stocks/create" class="text-white text-decoration-none">Tambah Data</a>
                </button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Varian Produk</th>
                        <th>Nama Admin</th>
                        <th>Jumlah Stok</th>
                        <th>Tanggal Update</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->stocks->sortByDesc('updated_at') as $index => $stock)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->varian }}</td>
                        <td>{{ $stock->admin->nama }}</td>
                        <td>{{ $stock->qty }}</td>
                        <td>{{ $stock->updated_at }}</td>
                        <td>
                            <button class="btn btn-warning btn-rounded"><a href="/dashboard/stocks/{{ $stock->id }}/edit" class="text-white text-decoration-none">Edit</a></button>
                            <form action="/dashboard/stocks/{{ $stock->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-rounded" onclick="return confirm('Apakah kamu yakin akan menghapus data tersebut?')">Delete</button>
                            </form>
                        </td>
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

    @include('partials.popup')

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rpg8bXScjPpr8gr5Dngw2oyhQ/WK7yzXW3Y2tm49dD5aN2scMZt/sS5vTpFHZB1K" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Ganti {productId} dengan ID produk yang ingin Anda ambil
            var productId = '{{ $product->varian }}';

            $.ajax({
                url: '/dashboard/products/' + productId + '/stocks', // URL endpoint
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Menampilkan data di console log
                    console.log("Labels:", response.labels);
                    console.log("Data:", response.data);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching stocks:", error);
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            var product = '{{ $product->varian }}';

            // Mengambil data stok produk
            $.ajax({
                url: '/dashboard/products/' + product + '/stocks', // URL endpoint
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Mengambil labels dan data dari response
                    const labels = response.labels; // Tanggal stok
                    const data = response.data; // Data stok

                    // Definisikan konfigurasi untuk Chart.js
                    const config = {
                        type: 'line', // Jenis chart: Line
                        data: {
                            labels: labels, // Tanggal stok
                            datasets: [{
                                label: 'Jumlah Stok',
                                data: data, // Data stok
                                borderColor: 'rgba(67, 128, 168, 1)', // Warna garis
                                backgroundColor: 'rgba(67, 128, 168, 0.2)', // Warna area di bawah garis
                                borderWidth: 2, // Ketebalan garis
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true // Memulai sumbu y dari 0
                                }
                            }
                        }
                    };

                    // Inisialisasi chart
                    const myChart = new Chart(
                        document.getElementById('stockChart'),
                        config
                    );
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching stocks:", error);
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Handle logout popup
            const logoutButton = document.getElementById("logoutButton");
            const logoutPopup = document.getElementById("logoutPopup");
            const closeLogoutPopup = document.getElementById("closeLogoutPopup");
            const cancelLogout = document.getElementById("cancelLogout");

            if (logoutButton) {
                logoutButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    logoutPopup.style.display = "flex";
                });
            }

            if (closeLogoutPopup) {
                closeLogoutPopup.addEventListener("click", function() {
                    logoutPopup.style.display = "none";
                });
            }

            if (cancelLogout) {
                cancelLogout.addEventListener("click", function() {
                    logoutPopup.style.display = "none";
                });
            }

            // Handle delete account popup
            const deleteAccountButton = document.getElementById("deleteAccountButton");
            const deleteAccountPopup = document.getElementById("deleteAccountPopup");
            const closeDeleteAccountPopup = document.getElementById("closeDeleteAccountPopup");
            const cancelDeleteAccount = document.getElementById("cancelDeleteAccount");

            if (deleteAccountButton) {
                deleteAccountButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    deleteAccountPopup.style.display = "flex";
                });
            }

            if (closeDeleteAccountPopup) {
                closeDeleteAccountPopup.addEventListener("click", function() {
                    deleteAccountPopup.style.display = "none";
                });
            }

            if (cancelDeleteAccount) {
                cancelDeleteAccount.addEventListener("click", function() {
                    deleteAccountPopup.style.display = "none";
                });
            }

            // Close popups if clicked outside of content
            window.addEventListener("click", function(event) {
                if (event.target === logoutPopup) {
                    logoutPopup.style.display = "none";
                }
                if (event.target === deleteAccountPopup) {
                    deleteAccountPopup.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>