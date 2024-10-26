<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="JivaJoy" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://jivajoy.id/" />
    <meta property="og:description"
        content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi" />
    <meta name="description" content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi">
    <title> JivaJoy | Buat Pesanan</title>
    <link rel="stylesheet preload" as="style" href="/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="/css/libs.min.css" />
    <link rel="stylesheet" href="/css/profile.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
    <link rel="stylesheet" href="/css/product.min.css" />
    <link rel="stylesheet" href="/css/order.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .header_nav {            
            font-family: NunitoSans, sans-serif !important;
            font-weight: 500 !important;
            font-size: 20px !important;
            color: #556260 !important;
        }
    </style>
</head>

<body>
    @include('partials.navbar')
    <!-- Single product content start -->
    <main>
        <section class="about section--nopb" style="padding-top: 140px !important;">
            <div class="container">
                <h1 class="text-center" style="font-size: 40px; font-weight: 800; color: #4682A9;">Detail Pesanan</h1>

                <div class="d-flex flex-column gap-2 mt-4 mt-md-5">
                    @foreach ($carts as $cart)
                    <div class="row align-items-center border-bottom py-3">
                        <!-- Image Section -->
                        <div class="col-3 col-md-1">
                            <img src="{{ $cart->product->foto_produk }}" alt="Product Image" class="img-fluid" style="height: 100px; width: auto;">
                        </div>
                        <!-- Product Details Section -->
                        <div class="col-9 col-md-11">
                            <!-- Product Name -->
                            <p class="title-product mb-1">JivaJoy: Aromatherapy 2in1
                                (Inhaler & Roll On)</p>
                            <!-- Product Info: Price, Quantity, Variant -->
                            <div class="d-flex">
                                <div class="detail me-4">
                                    <p class="mb-0 title-price">Total Harga</p>
                                    <p class="price">Rp {{ number_format($cart->total_harga, 0, ',', '.') }}</p>
                                </div>
                                <div class="detail me-4">
                                    <p class="mb-0 title-price">Jumlah</p>
                                    <p class="price">{{ $cart->qty }} pcs</p>
                                </div>
                                <div class="detail me-4">
                                    <p class="mb-0 title-price">Varian</p>
                                    <p class="price">{{ $cart->product->varian }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <form action="/orders" method="post" class="my-5" >
                    @csrf
                    <h5 style="font-size: 24px; font-weight: 700; color: #4682A9;">Informasi Penerima</h5>

                    <input type="hidden" name="id_customer" value="{{ auth()->user()->id }}">

                    <div class="mb-3 form-input">
                        <label for="nama_penerima" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Masukkan nama penerima" required value="{{ old('nama_penerima') }}">
                        @error('nama_penerima')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3 form-input">
                        <label for="no_wa" class="form-label">Nomor WhatsApp</label>
                        <input type="text" class="form-control" id="no_wa" name="no_wa" placeholder="Masukkan nomor WhatsApp penerima" required value="{{ old('no_wa') }}">
                        @error('no_wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3 form-input">
                        <label for="link_gmaps" class="form-label">Link Google Maps</label>
                        <input type="text" class="form-control" id="link_gmaps" name="link_gmaps" placeholder="Masukkan link Google Maps lokasi tujuan" required value="{{ old('link_gmaps') }}">
                        @error('link_gmaps')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="text-area w-100 my-1">
                        <label for="detail_alamat" class="form-label my-0 mb-2">Detail Alamat</label>
                        <textarea name="detail_alamat" class="form-control @error('detail_alamat') is-invalid @enderror" id="detail_alamat" placeholder="Contoh: Nama Jalan, Gedung, No. Rumah, Blok/Unit, Patokan" required style="min-height: 100px;">{{ old('detail_alamat') }}</textarea>
                        @error('detail_alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="my-4 button d-flex justify-content-between">
                        <div class="col-4">
                            <p class="mb-0 title-price-total">Total Harga</p>
                            <p class="price-total">Rp {{ number_format($total_harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="col-8 d-flex gap-2 gap-md-3">
                            <div class="submit col-8 h-100 my-md-auto mb-3">
                                <button type="submit" style="border-radius: 30px;" id="checkout-btn">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0466 7.875C19.0824 7.79527 19.0991 7.70838 19.0956 7.62111H19.125C18.9992 4.61915 16.5205 2.25 13.5056 2.25C10.4906 2.25 8.01194 4.61915 7.88612 7.62111C7.87129 7.7051 7.87129 7.79102 7.88612 7.875H7.79818C6.3565 7.875 4.81539 8.82671 4.36797 11.3851L3.49302 18.3541C2.77715 23.4708 5.41195 24.75 8.8521 24.75H18.1783C21.6085 24.75 24.1637 22.8977 23.5274 18.3541L22.6624 11.3851C22.1354 8.89835 20.6441 7.875 19.2223 7.875H19.0466ZM17.4299 7.875C17.3986 7.79394 17.382 7.70797 17.3809 7.62111C17.3809 5.46393 15.6261 3.71518 13.4615 3.71518C11.2968 3.71518 9.54207 5.46393 9.54207 7.62111C9.5569 7.7051 9.5569 7.79102 9.54207 7.875H17.4299ZM10.2341 13.6671C9.68501 13.6671 9.23986 13.209 9.23986 12.6438C9.23986 12.0786 9.68501 11.6205 10.2341 11.6205C10.7832 11.6205 11.2284 12.0786 11.2284 12.6438C11.2284 13.209 10.7832 13.6671 10.2341 13.6671ZM15.7523 12.6438C15.7523 13.209 16.1974 13.6671 16.7465 13.6671C17.2957 13.6671 17.7408 13.209 17.7408 12.6438C17.7408 12.0786 17.2957 11.6205 16.7465 11.6205C16.1974 11.6205 15.7523 12.0786 15.7523 12.6438Z" fill="currentColor" />
                                    </svg>
                                    Checkout
                                </button>
                            </div>
                            <div class="back col-4 h-100 my-md-auto mb-3">
                                <a href="/carts" id="back-button" style="border-radius: 30px;">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>
    <!-- Single product content end -->

    @include('partials.footer')
    @include('partials.popup')

    <script src="js/common.min.js"></script>
    <script src="js/shop.min.js"></script>
    <script src="js/script.js"></script>

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

        document.getElementById('variant').addEventListener('change', function() {
            var selectedVariant = document.getElementById('variant');
            var stockInfo = selectedVariant.options[selectedVariant.selectedIndex].getAttribute('data-stock');
            var quantityInput = document.getElementById('quantity');

            // Tampilkan jumlah stok dari varian yang dipilih
            document.getElementById('stock-info').textContent = 'Jumlah stok yang tersedia ' + stockInfo + ' pcs';

            // Cek apakah kuantitas melebihi stok varian baru
            if (parseInt(quantityInput.value) > parseInt(stockInfo)) {
                alert('Jumlah melebihi stok yang tersedia!');
                // Atur kuantitas menjadi maksimal yang tersedia
                quantityInput.value = stockInfo;
            }

            // Update harga dengan kuantitas baru (jika ada perubahan)
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