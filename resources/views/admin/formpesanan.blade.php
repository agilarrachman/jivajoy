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
    <title>JivaJoy Admin Dashboard</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #868E8C;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #cfdee8;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .sidebar img {
            width: 100%;
            max-width: 150px;
            margin: 0 auto;
            display: block;
        }

        .sidebar a {
            color: #4380a8;
            padding: 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #4380a8;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .breadcrumb {
            background-color: transparent;
        }

        .btn-rounded {
            border-radius: 25px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-input {
            margin-bottom: 15px;
        }

        .table thead th {
            background-color: #4380a8;
            color: white;
        }

        .img-product {
            width: 50px;
            height: auto;
        }
    </style>
</head>

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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/' . auth()->user()->foto_profil) }}" alt="Foto Profil" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Keluar Akun</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="{{asset('img/jivajoyhighres.png')}}" alt="JivaJoy Logo">
        <br><br>
        <a href="{{ url('/admin/datacustomer') }}">Data Customer</a>
        <a href="{{ url('/admin/dataproduk') }}">Data Produk</a>
        <a href="{{ url('/admin/datakeranjang') }}" class="{{ request()->is('admin/datakeranjang') ? 'active' : '' }}">Data Keranjang</a>
        <a href="{{ url('/admin/datapesanan') }}">Data Pesanan</a>
        <a href="{{ url('/admin/chat') }}">Chat</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah/Edit Pesanan</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8;">Tambah/Edit Pesanan</h1>
            </div>

            <!-- Form Input -->
            <form action="{{ url('/admin/datapesanan/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 form-input">
                    <label for="orderId" class="form-label">ID Pesanan</label>
                    <input type="text" class="form-control" id="orderId" name="order_id" placeholder="Masukkan ID pesanan" required>
                </div>

                <div class="mb-3 form-input">
                    <label for="customerId" class="form-label">ID Customer</label>
                    <input type="text" class="form-control" id="customerId" name="customer_id" placeholder="Masukkan ID customer" required>
                </div>

                <div class="mb-3 form-input">
                    <label for="customerName" class="form-label">Nama Customer</label>
                    <input type="text" class="form-control" id="customerName" name="customer_name" placeholder="Masukkan nama customer" required>
                </div>

                <div class="mb-3 form-input">
                    <label for="productVariant" class="form-label">Varian yang Dibeli</label>
                    <input type="text" class="form-control" id="productVariant" name="product_variant" placeholder="Masukkan varian produk" required>
                </div>

                <div class="mb-3 form-input">
                    <label for="totalPrice" class="form-label">Total Harga</label>
                    <input type="number" class="form-control" id="totalPrice" name="total_price" placeholder="Masukkan total harga" required>
                </div>

                <div class="mb-3 form-input">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat pengiriman"></textarea>
                </div>

                <div class="mb-3 form-input">
                    <label for="orderStatus" class="form-label">Status Pesanan</label>
                    <select class="form-select" id="orderStatus" name="order_status" required>
                        <option value="Sedang Diproses">Sedang Diproses</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-rounded">Simpan</button>
            </form>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rpg8b
