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
    <title> JivaJoy | Lihat Pesanan</title>
    <link rel="stylesheet preload" as="style" href="/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="/css/libs.min.css" />
    <link rel="stylesheet" href="/css/profile.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
    <link rel="stylesheet" href="/css/product.min.css" />
    <link rel="stylesheet" href="/css/show-order.css" />
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
                <h1 class="text-center" style="font-size: 40px; font-weight: 800; color: #4682A9;">Pesanan Saya</h1>

                <div class="content d-flex flex-column flex-md-row my-5 gap-5">
                    <div class="col-md-5">
                        <img src="/img/QRIS JIVAJOY.jpg" alt="QRIS Jivajoy" class="img-fluid shadow" style="width: 100%; border-radius:30px;">
                    </div>
                    <div class="col-md-7">
                        <p class="status px-3 py-1 mb-1">Belum dibayar</p>
                        <div class="d-flex flex-column gap-2">
                            @foreach ($carts as $cart)
                            <div class="row align-items-center border-bottom py-3">
                                <!-- Image Section -->
                                <div class="col-3 col-md-2">
                                    <img src="{{ $cart->product->foto_produk }}" alt="Product Image" class="img-fluid" style="height: 100px; width: auto;">
                                </div>
                                <!-- Product Details Section -->
                                <div class="col-9 col-md-10">

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

                        <div class="guide row mt-4">
                            <div class="col-md-6 p-1">
                                <h5>Tata Cara Pembayaran</h5>
                                <ol>
                                    <li>Buka aplikasi pembayaran atau dompet digital (misalnya, Gopay, OVO, DANA, ShopeePay, BCA Mobile, dll.) yang mendukung pembayaran melalui QRIS.
                                    <li>Di dalam aplikasi pembayaran, pilih opsi Pindai/Scan dan arahkan kamera ponsel Anda ke kode QR yang tampil di layar.</li>
                                    <li>Masukkan jumlah yang akan dibayar sesuai dengan tagihan.</li>
                                    <li>Periksa kembali nominal dan detail transaksi yang muncul di aplikasi, lalu tekan Bayar/Konfirmasi.</li>
                                    <li>Masukkan PIN atau autentikasi lainnya (seperti sidik jari) untuk menyelesaikan pembayaran. Setelah pembayaran berhasil, Anda akan mendapatkan notifikasi atau bukti transaksi di aplikasi.</li>
                                    </ul>
                            </div>
                            <div class="col-md-6 p-1">
                                <h5>Tata Cara Upload Bukti Pembayaran</h5>
                                <ol>
                                    <li>Setelah transaksi selesai, simpan atau screenshot bukti pembayaran yang muncul di aplikasi.</li>
                                    <li>Upload Bukti Pembayaran pada halaman ini dengan klik tombol Pilih File, lalu cari bukti pembayaran yang sudah Anda simpan atau screenshot tadi di galeri atau file Anda.</li>
                                    <li>Setelah memilih bukti pembayaran, klik Upload. Tunggu hingga proses unggah selesai.</li>
                                    <li>Setelah bukti pembayaran berhasil diunggah, Admin akan memverifikasi pesanan Anda. Refresh halaman ini secara berkala untuk update status pesanan.</li>
                                </ol>
                            </div>
                        </div>

                        <form action="/orders" method="post" enctype="multipart/form-data" class="bukti_bayar my-0">
                            @csrf
                            <label for="bukti_bayar" class="form-label">Bukti Pembayaran</label>
                            <div class="row">
                                <div class="d-flex col-9 align-items-center">
                                    <input type="file" name="bukti_bayar" id="bukti_bayar" class="form-control m-auto @error('bukti_bayar') is-invalid @enderror">
                                </div>
                                <div class="col-3">
                                    <button class="w-100 m-0 px-2" type="submit">Submit</button>
                                </div>
                            </div>
                            @error('foto_profil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div id="rules" class="form-text mb-2">Silakan unggah gambar bukti pembayaran dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
                        </form>

                        <p class="text-danger mb-4">*Pesanan tidak dapat dibatalkan setelah melakukan pembayaran</p>

                        <div class="d-flex flex-column flex-md-row gap-2 gap-md-3">
                            <div class="cancel col-12 col-md-6 h-100 my-md-auto mb-3">
                                <a href="#" id="outline-button" style="border-radius: 30px;">
                                    Batalkan Pesanan
                                </a>
                            </div>
                            <div class="submit col-12 col-md-6 h-100 my-md-auto mb-3">
                                <a href="/orders" id="back-btn">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0466 7.875C19.0824 7.79527 19.0991 7.70838 19.0956 7.62111H19.125C18.9992 4.61915 16.5205 2.25 13.5056 2.25C10.4906 2.25 8.01194 4.61915 7.88612 7.62111C7.87129 7.7051 7.87129 7.79102 7.88612 7.875H7.79818C6.3565 7.875 4.81539 8.82671 4.36797 11.3851L3.49302 18.3541C2.77715 23.4708 5.41195 24.75 8.8521 24.75H18.1783C21.6085 24.75 24.1637 22.8977 23.5274 18.3541L22.6624 11.3851C22.1354 8.89835 20.6441 7.875 19.2223 7.875H19.0466ZM17.4299 7.875C17.3986 7.79394 17.382 7.70797 17.3809 7.62111C17.3809 5.46393 15.6261 3.71518 13.4615 3.71518C11.2968 3.71518 9.54207 5.46393 9.54207 7.62111C9.5569 7.7051 9.5569 7.79102 9.54207 7.875H17.4299ZM10.2341 13.6671C9.68501 13.6671 9.23986 13.209 9.23986 12.6438C9.23986 12.0786 9.68501 11.6205 10.2341 11.6205C10.7832 11.6205 11.2284 12.0786 11.2284 12.6438C11.2284 13.209 10.7832 13.6671 10.2341 13.6671ZM15.7523 12.6438C15.7523 13.209 16.1974 13.6671 16.7465 13.6671C17.2957 13.6671 17.7408 13.209 17.7408 12.6438C17.7408 12.0786 17.2957 11.6205 16.7465 11.6205C16.1974 11.6205 15.7523 12.0786 15.7523 12.6438Z" fill="currentColor" />
                                    </svg>
                                    Kembali ke Pesanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Single product content end -->

    @include('partials.footer')
    @include('partials.popup')

    <script src="js/common.min.js"></script>
    <script src="js/shop.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>