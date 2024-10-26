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
    <title>JivaJoy Admin | Detail Pesanan</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/popup.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
    <style>
        .status {
            background-color: #E4E4E4;
            font-weight: 600;
            color: #4682A9;
            font-size: 14px;
            border-radius: 20px;
            width: fit-content;
        }

        .status.active {
            background-color: #4682A9;
            font-weight: 600;
            color: white;
            font-size: 14px;
            border-radius: 20px;
            width: fit-content;
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
                    <li class="breadcrumb-item"><a href="/dashboard/orders">Data Pesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
                </ol>
            </nav>


            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8;">Detail Pesanan</h1>
                <a href="/dashboard/orders" class="btn btn-secondary btn-rounded">Kembali</a>
            </div>

            <!-- Form Input -->
            <div>
                <div class="d-flex flex-column">
                    <div class="col">
                        <p class="status {{ $order->status == 'Belum Dibayar' ? '' : 'active' }} px-3 py-2 my-2">
                            @if($order->status == 'Sedang Dikemas')
                            Pesanan sedang dikemas
                            @elseif($order->status == 'Sedang Diantar')
                            Pesanan sedang dikirim
                            @elseif($order->status == 'PesananSelesai')
                            Pesanan Selesai
                            @else
                            Pesanan {{ $order->status }}
                            @endif
                        </p>
                        <p class="info my-2">Kode Pesanan : {{ $order->kode_pesanan }}</p>
                        <p class="info">Waktu Pemesanan : {{ $order->created_at->format('H:i - d/m/Y') }}</p>
                    </div>

                    <div class="row">
                        <div class="col-md-5 {{ is_null($order->bukti_pembayaran) ? 'd-none' : '' }}">
                            <img src="{{ asset('storage/' . $order->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid shadow" style="width: 100%; border-radius:30px;">
                        </div>
                        <div class="{{ is_null($order->bukti_pembayaran) ? 'col-md-12' : 'col-md-7' }}">
                            <div class="col-4">
                                <p class="mb-0 title-price-total">Total Harga</p>
                                <p class="price-total">Rp {{ number_format($order->total_harga, 0, ',', '.') }}</p>
                            </div>

                            @foreach ($order->orderItems as $item)
                            <div class="row align-items-center border-bottom py-3">
                                <!-- Image Section -->
                                <div class="col-3 {{ is_null($order->bukti_pembayaran) ? 'col-md-1' : 'col-md-2' }}">
                                    <img src="{{ $item->product->foto_produk }}" alt="Product Image" class="img-fluid" style="height: 100px; width: auto;">
                                </div>
                                <!-- Product Details Section -->
                                <div class="col-9 {{ is_null($order->bukti_pembayaran) ? 'col-md-11' : 'col-md-10' }}">
                                    <!-- Product Name -->
                                    <p class="title-product mb-1">JivaJoy: Aromatherapy 2in1
                                        (Inhaler & Roll On)</p>
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

                            <form action="" class="my-5">
                                <h5 style="font-size: 24px; font-weight: 700; color: #4682A9;">Informasi Penerima</h5>

                                <div class="mb-3 form-input">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control bg-white" id="nama" value="{{ $order->nama_penerima }}" disabled>
                                </div>

                                <div class="mb-3 form-input">
                                    <label for="no_wa" class="form-label">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Masukkan nomor WhatsApp penerima" required value="{{ $order->no_wa }}">
                                    @error('no_wa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 form-input">
                                    <label for="link_gmaps" class="form-label">Link Google Maps</label>
                                    <input type="text" class="form-control" id="link_gmaps" name="link_gmaps" placeholder="Masukkan link Google Maps lokasi tujuan" required value="{{ $order->link_gmaps }}">
                                    @error('link_gmaps')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="text-area w-100 my-1">
                                    <label for="detail_alamat" class="form-label my-0 mb-2">Detail Alamat</label>
                                    <textarea name="detail_alamat" class="form-control @error('detail_alamat') is-invalid @enderror" id="detail_alamat" placeholder="Contoh: Nama Jalan, Gedung, No. Rumah, Blok/Unit, Patokan" required style="min-height: 100px;">{{ $order->detail_alamat }}</textarea>
                                    @error('detail_alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <a href="/dashboard/orders" class="btn btn-rounded my-3" id="buttonPrimary">Kembali</a>
                <button class="btn btn-warning btn-rounded" style="min-width: 80px;"><a href="/dashboard/orders/{{ $order->id }}/edit" class="text-white text-decoration-none">Edit</a></button>
                <form action="/dashboard/orders/{{ $order->id }}" method="post" class="d-inline" style="min-width: 80px;">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-rounded" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>

    @include('partials.popup')

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rpg8bXScjPpr8gr5Dngw2oyhQ/WK7yzXW3Y2tm49dD5aN2scMZt/sS5vTpFHZB1K" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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