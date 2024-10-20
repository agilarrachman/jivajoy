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
    <title>JivaJoy Admin | Data Produk</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/popup.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
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
                    <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8; margin-bottom: 10px;">Data Produk</h1>
                <button class="btn btn-primary btn-rounded" id="buttonPrimary">
                    <a href="/dashboard/stocks/create" class="text-white text-decoration-none">Tambah Data</a>
                </button>
            </div>

            @if(session()->has('success'))
            <div class="alert my-2 alert-success col-lg-10" role="alert">{{ session('success') }}</div>
            @endif

            <!-- Product Table -->
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Varian Produk</th>
                            <th>Stok</th>
                            <th>Tanggal Update</th>
                            <th>Actions</th> <!-- Aksi yang diperbarui -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="d-flex"><img src="{{ $product->foto_produk }}" alt="{{ $product->varian }}" class="img-product mx-auto" style="height: 150px;"></td>
                            <td>{{ $product->varian }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <button class="btn btn-primary btn-rounded" id="buttonPrimary">
                                    <a href="/dashboard/products/{{ $product->varian }}" class="text-white text-decoration-none">Lihat Detail</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('partials.popup')

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rpg8bXScjPpr8gr5Dngw2oyhQ/WK7yzXW3Y2tm49dD5aN2scMZt/sS5vTpFHZB1K" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

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