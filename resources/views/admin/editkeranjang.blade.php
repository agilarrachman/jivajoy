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
    <title>JivaJoy Admin | Edit Keranjang</title>

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
                    <li class="breadcrumb-item"><a href="/dashboard/carts">Data Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data Keranjang</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 style="color: #4380a8;">Edit Data Keranjang</h1>
            </div>

            <!-- Form Input -->
            <form action="/dashboard/carts/{{ $cart->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-4">
                    <label for="id_customer" class="form-label">Username</label>
                    <select class="form-select" name="id_customer">
                        @foreach ($customers as $customer)
                        @if(old('username', $cart->id_customer) == $customer->id)
                        <option value="{{ $customer->id }}" selected>{{ $customer->username }}</option>
                        @else
                        <option value="{{ $customer->id }}">{{ $customer->username }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <!-- Pilih Varian -->
                <div class="variant-section col-12" style="margin-bottom: 15px;">
                    <p style="margin-right: 10px;" class="mt-2 fs-5">Pilih Varian:</p>
                    <select id="variant" class="form-select" required style="width: 100%;">
                        @if($products->isEmpty())
                        <option selected>Tidak tersedia</option>
                        @else
                        @foreach ($products as $product)
                        @if($product->stok > 0)
                        <option value="{{ $product->id }}" data-stock="{{ $product->stok }}" {{ old('id_product', $cart->id_product) == $product->id ? 'selected' : '' }}>
                            {{ $product->varian }}
                        </option>
                        @endif
                        @endforeach
                        @endif
                    </select>
                </div>

                <!-- Jumlah Qty -->
                <div class="quantity-section col-12 col-md-4 mb-3">
                    <p class="mt-4 mb-0 fs-5">Jumlah</p>
                    <div class="d-flex align-items-center w-100">
                        <button type="button" id="decrease-qty">-</button>
                        <input type="number" id="quantity" value="{{ $cart->qty }}" min="1" class="form-control text-center" readonly>
                        <button type="button" id="increase-qty">+</button>
                    </div>
                    <p class="my-1" id="stock-info">
                        @if($products->isEmpty())
                        Produk sedang tidak tersedia!
                        @else
                        Jumlah stok yang tersedia {{ $products->first()->stok }} pcs
                        @endif
                    </p>
                </div>

                <div class="d-flex my-5">
                    <!-- Jumlah Harga -->
                    <div class="price-section col-3">
                        <p class="my-0 fs-5">Jumlah Harga</p>
                        <h5 id="total-price" style="font-weight: bold;">Rp {{ number_format($cart->total_harga) }}</h5>
                    </div>

                    <button class="btn col-9 py-1 my-1" type="submit" id="buttonSubmit">Update Data Keranjang</button>
                </div>

                <input type="hidden" name="id_product" id="cart-variant">
                <input type="hidden" name="qty" id="cart-quantity">
                <input type="hidden" name="total_harga" id="cart-total-price">
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

    <script>
        document.getElementById('increase-qty').addEventListener('click', function() {
            var qty = document.getElementById('quantity');
            var selectedVariant = document.getElementById('variant');
            var maxStock = selectedVariant.options[selectedVariant.selectedIndex].getAttribute('data-stock');

            if (parseInt(qty.value) < parseInt(maxStock)) {
                qty.value = parseInt(qty.value) + 1;
                updatePrice();
            } else {
                alert('Jumlah melebihi stok yang tersedia!');
            }
        });

        document.getElementById('decrease-qty').addEventListener('click', function() {
            var qty = document.getElementById('quantity');
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
                updatePrice();
            }
        });

        // Pengaturan awal untuk menampilkan informasi stok yang benar untuk varian yang dipilih
        document.addEventListener('DOMContentLoaded', function() {
            var selectedVariant = document.getElementById('variant');
            var stockInfo = selectedVariant.options[selectedVariant.selectedIndex].getAttribute('data-stock');
            document.getElementById('stock-info').textContent = 'Jumlah stok yang tersedia ' + stockInfo + ' pcs';
        });


        document.getElementById('variant').addEventListener('change', function() {
            var selectedVariant = document.getElementById('variant');
            var stockInfo = selectedVariant.options[selectedVariant.selectedIndex].getAttribute('data-stock');
            var quantityInput = document.getElementById('quantity');

            // Display stock info for the selected variant
            document.getElementById('stock-info').textContent = 'Jumlah stok yang tersedia ' + stockInfo + ' pcs';

            // Check if the quantity exceeds the available stock
            if (parseInt(quantityInput.value) > parseInt(stockInfo)) {
                alert('Jumlah melebihi stok yang tersedia!');
                // Set quantity to the maximum available stock
                quantityInput.value = stockInfo;
            }

            // Update price with the new quantity (if there is a change)
            updatePrice();
        });


        function updatePrice() {
            var qty = document.getElementById('quantity').value;
            var variant = document.getElementById('variant').value;
            var pricePerItem = 30000;
            var totalPrice = qty * pricePerItem;

            document.getElementById('total-price').textContent = 'Rp ' + totalPrice.toLocaleString();

            // Update nilai input hidden di kedua form
            document.getElementById('cart-quantity').value = qty;
            document.getElementById('cart-total-price').value = totalPrice;
            document.getElementById('cart-variant').value = variant;

            document.getElementById('checkout-quantity').value = qty;
            document.getElementById('checkout-total-price').value = totalPrice;
            document.getElementById('checkout-variant').value = variant;
        }

        // Initial update for price when page loads
        updatePrice();
    </script>
</body>

</html>