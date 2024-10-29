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
    <title>JivaJoy Admin | Edit Pesanan</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/formproduk.css" />
    <link rel="stylesheet" href="/css/popup.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">

    <style>
        .quantity-section button {
            background-color: #4682A9;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 100px;
            font-weight: 700;
        }

        .quantity-section button:hover {
            background-color: #1c6291;
        }

        .quantity-section input {
            margin: 0 10px;
            text-align: center;
            width: 100px;
        }

        #buttonSubmit:hover {
            background-color: #084e7e;
        }

        .price-total {
            font-size: 1.2em;
            font-weight: 700;
            color: #4682A9;
        }

        .title-price-total {
            font-weight: 500;
            font-size: 0.8em;
            color: #868E8C;
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
                    <li class="breadcrumb-item"><a href="/dashboard/orders">Data Pesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data Pesanan</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8;">Edit Data Pesanan</h1>
            </div>

            <!-- Form Input -->
            <form action="/dashboard/orders/{{ $order->kode_pesanan }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-4">
                    <label for="id_customer" class="form-label">Username Customer</label>
                    <input type="text" class="form-control bg-white" id="nama" value="{{ $order->customer->username }}" disabled>
                </div>

                <label for="order" class="form-label">Detail Pesanan</label>
                <p class="info m-0">Kode Pesanan : <strong style="color: #4682A9;">{{ $order->kode_pesanan }}</strong></p>
                <p class="info mt-0 mb-2">Waktu Pemesanan : <strong style="color: #4682A9;">{{ $order->created_at->format('H:i - d/m/Y') }}</strong></p>
                @foreach ($order->orderItems as $item)
                <div class="d-flex gap-2 border-bottom">
                    <!-- Image Section -->
                    <div class="column">
                        <img src="{{ $item->product->foto_produk }}" alt="Product Image" class="img-fluid" style="height: 100px; width: auto;">
                    </div>
                    <!-- Product Details Section -->
                    <div class="column mt-2">
                        <!-- Product Name -->
                        <p class="title-product mb-1"><strong style="color: #4682A9;">JivaJoy: Aromatherapy 2in1
                            (Inhaler & Roll On)</strong></p>
                        <!-- Product Info: Price, Quantity, Variant -->
                        <div class="d-flex">
                            <div class="detail me-4">
                                <p class="mb-0 title-price">Total Harga</p>
                                <p class="price">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="detail me-4">
                                <p class="mb-0 title-price">Jumlah</p>
                                <p class="price">{{ $item->qty }} pcs</p>
                            </div>
                            <div class="detail me-4">
                                <p class="mb-0 title-price">Varian</p>
                                <p class="price">{{ $item->product->varian }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="price py-2 border-bottom">
                    <p class="mb-0 title-price-total">Total Harga</p>
                    <p class="price-total m-0">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</p>
                </div>

                <div class="my-4">
                    <label for="status" class="form-label">Status Pesanan</label>
                    <select class="form-select" name="status">
                        <option value="Belum Dibayar" {{ old('status', $order->status) == 'Belum Dibayar' ? 'selected' : '' }}>Belum Dibayar</option>
                        <option value="Menunggu Konfirmasi Pembayaran" {{ old('status', $order->status) == 'Menunggu Konfirmasi Pembayaran' ? 'selected' : '' }}>Menunggu Konfirmasi Pembayaran</option>
                        <option value="Sedang Dikemas" {{ old('status', $order->status) == 'Sedang Dikemas' ? 'selected' : '' }}>Sedang Dikemas</option>
                        <option value="Sedang Dikirim" {{ old('status', $order->status) == 'Sedang Dikirim' ? 'selected' : '' }}>Sedang Dikirim</option>
                        <option value="Pesanan Selesai" {{ old('status', $order->status) == 'Pesanan Selesai' ? 'selected' : '' }}>Pesanan Selesai</option>
                        <option value="Dibatalkan" {{ old('status', $order->status) == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option> <!-- Tambahkan opsi baru di sini -->
                    </select>
                </div>

                <div class="col d-flex flex-column w-80 mb-5">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    @if($order->bukti_pembayaran)
                    <img src="{{ asset('storage/' . $order->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid shadow mt-3 mb-5" style="width: 350px; border-radius:20px; object-fit:contain;">
                    @else
                    <p style="color: black;">Customer belum mengunggah bukti pembayaran</p>
                    @endif
                    <label for="bukti_pembayaran" class="mb-2">Masukkan bukti pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control mx-auto @error('bukti_pembayaran') is-invalid @enderror">
                    @error('bukti_pembayaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
                </div>

                <h5 style="font-size: 24px; font-weight: 700; color: #4682A9;">Informasi Penerima</h5>

                <div class="mb-3 form-input">
                    <label for="nama_penerima" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Masukkan nama penerima" required value="{{ old('nama_penerima', $order->nama_penerima) }}">
                    @error('nama_penerima')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3 form-input">
                    <label for="no_wa" class="form-label">Nomor WhatsApp</label>
                    <input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Masukkan nomor WhatsApp penerima" required value="{{ old('no_wa', $order->no_wa) }}">
                    @error('no_wa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3 form-input">
                    <label for="link_gmaps" class="form-label">Link Google Maps</label>
                    <input type="text" class="form-control" id="link_gmaps" name="link_gmaps" placeholder="Masukkan link Google Maps lokasi tujuan" required value="{{ old('link_gmaps', $order->link_gmaps) }}">
                    @error('link_gmaps')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="text-area w-100 my-1">
                    <label for="detail_alamat" class="form-label my-0 mb-2">Detail Alamat</label>
                    <textarea name="detail_alamat" class="form-control @error('detail_alamat') is-invalid @enderror" id="detail_alamat" placeholder="Contoh: Nama Jalan, Gedung, No. Rumah, Blok/Unit, Patokan" required style="min-height: 100px;">{{ old('detail_alamat', $order->detail_alamat) }}</textarea>
                    @error('detail_alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <button class="btn w-100 py-2 my-3" type="submit" id="buttonSubmit">Perbarui Data Pesanan</button>
            </form>
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