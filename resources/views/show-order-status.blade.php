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

        .status-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .status-item {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .status-item .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
            outline: 2px solid #4682A9;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            color: #4682A9;
        }

        .status-item .circle.active {
            outline: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #4682A9;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            color: white;
        }

        .status-item .circle svg {
            width: 25px;
            height: 25px;
        }

        .status-item .status-text {
            margin-top: 10px;
            font-size: 14px;
            font-family: NunitoSans, sans-serif;
            color: #556260;
        }

        /* Garis penghubung antar status */
        .status-container::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 20%;
            right: 20%;
            height: 2px;
            background-color: #4682A9;
            z-index: 0;
        }

        /* Garis tidak melebihi ikon */
        .status-item:first-child::before,
        .status-item:last-child::before {
            content: none;
        }

        #back-button {
            background-color: #4682A9;
            padding: 12px;
            width: 100%;
            color: white;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px
        }

        #back-button:hover {
            background-color: #084e7e;
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

                <div class="content d-flex flex-column-reverse flex-md-row my-5 gap-5">
                    <div class="col-md-7">
                        <p class="status active px-3 py-1 mb-1">Belum dibayar</p>
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
                    </div>

                    <div class="col-md-5">
                        <h5 class="text-center text-md-start mb-3 px-md-5">Status Pesanan</h5>
                        <div class="status-container">
                            <!-- Fase 1: Dikemas -->
                            <div class="status-item">
                                <div class="circle active">
                                    <!-- SVG Icon untuk Dikemas -->
                                    <svg width="31" height="34" viewBox="0 0 31 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.2199 8.07999L16.5276 1.13528C16.1885 0.947898 15.8074 0.849609 15.4199 0.849609C15.0325 0.849609 14.6514 0.947898 14.3122 1.13528L1.61992 8.08288C1.25745 8.2812 0.954879 8.5732 0.743795 8.92839C0.532711 9.28358 0.42086 9.68893 0.419922 10.1021V23.8963C0.42086 24.3095 0.532711 24.7149 0.743795 25.0701C0.954879 25.4252 1.25745 25.7172 1.61992 25.9156L14.3122 32.8632C14.6514 33.0505 15.0325 33.1488 15.4199 33.1488C15.8074 33.1488 16.1885 33.0505 16.5276 32.8632L29.2199 25.9156C29.5824 25.7172 29.885 25.4252 30.0961 25.0701C30.3071 24.7149 30.419 24.3095 30.4199 23.8963V10.1035C30.4198 9.68964 30.3083 9.28339 30.0971 8.92737C29.886 8.57135 29.583 8.27867 29.2199 8.07999ZM15.4199 3.15451L27.0074 9.50066L22.7137 11.8516L11.1247 5.50547L15.4199 3.15451ZM15.4199 15.8468L3.83242 9.50066L8.72184 6.82374L20.3093 13.1699L15.4199 15.8468ZM2.72761 11.5199L14.2661 17.8343V30.2079L2.72761 23.8978V11.5199ZM28.1122 23.892L16.5738 30.2079V17.8401L21.1892 15.3146V20.4622C21.1892 20.7682 21.3107 21.0617 21.5271 21.2781C21.7435 21.4945 22.037 21.616 22.343 21.616C22.649 21.616 22.9425 21.4945 23.1589 21.2781C23.3753 21.0617 23.4968 20.7682 23.4968 20.4622V14.0511L28.1122 11.5199V23.8906V23.892Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="status-text">Dikemas</div>
                            </div>

                            <!-- Fase 2: Dikirim -->
                            <div class="status-item">
                                <div class="circle">
                                    <!-- SVG Icon untuk Dikirim -->
                                    <svg width="31" height="22" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.3918 19.8645C24.5236 19.8645 25.4372 18.9509 25.4372 17.8191C25.4372 16.6873 24.5236 15.7736 23.3918 15.7736C22.26 15.7736 21.3463 16.6873 21.3463 17.8191C21.3463 18.9509 22.26 19.8645 23.3918 19.8645ZM25.4372 7.5918H22.0281V11.0009H28.11L25.4372 7.5918ZM7.02814 19.8645C8.15996 19.8645 9.0736 18.9509 9.0736 17.8191C9.0736 16.6873 8.15996 15.7736 7.02814 15.7736C5.89632 15.7736 4.98269 16.6873 4.98269 17.8191C4.98269 18.9509 5.89632 19.8645 7.02814 19.8645ZM26.1191 5.54634L30.21 11.0009V17.8191H27.4827C27.4827 20.0827 25.6554 21.91 23.3918 21.91C21.1281 21.91 19.3009 20.0827 19.3009 17.8191H11.1191C11.1191 20.0827 9.29178 21.91 7.02814 21.91C4.76451 21.91 2.93723 20.0827 2.93723 17.8191H0.209961V2.81907C0.209961 1.30543 1.4236 0.0917969 2.93723 0.0917969H22.0281V5.54634H26.1191ZM2.93723 2.81907V15.0918H3.9736C4.7236 14.26 5.81451 13.7282 7.02814 13.7282C8.24178 13.7282 9.33269 14.26 10.0827 15.0918H19.3009V2.81907H2.93723Z" fill="currentColor" />
                                    </svg>
                                </div>
                                <div class="status-text">Dikirim</div>
                            </div>

                            <!-- Fase 3: Selesai -->
                            <div class="status-item">
                                <div class="circle">
                                    <!-- SVG Icon untuk Selesai -->
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.18704 12.6526L2.01662 8.48218C1.90757 8.37179 1.77769 8.28415 1.63451 8.22434C1.49134 8.16452 1.33771 8.13372 1.18254 8.13372C1.02737 8.13372 0.873744 8.16452 0.730567 8.22434C0.58739 8.28415 0.45751 8.37179 0.348456 8.48218C0.238071 8.59123 0.150431 8.72111 0.0906156 8.86429C0.0308004 9.00747 0 9.16109 0 9.31626C0 9.47143 0.0308004 9.62506 0.0906156 9.76823C0.150431 9.91141 0.238071 10.0413 0.348456 10.1503L5.34104 15.1429C5.80575 15.6076 6.55642 15.6076 7.02113 15.1429L19.6515 2.52444C19.7619 2.41538 19.8496 2.2855 19.9094 2.14232C19.9692 1.99915 20 1.84552 20 1.69035C20 1.53518 19.9692 1.38156 19.9094 1.23838C19.8496 1.0952 19.7619 0.965322 19.6515 0.856268C19.5425 0.745884 19.4126 0.658243 19.2694 0.598428C19.1263 0.538613 18.9726 0.507812 18.8175 0.507812C18.6623 0.507812 18.5087 0.538613 18.3655 0.598428C18.2223 0.658243 18.0924 0.745884 17.9834 0.856268L6.18704 12.6526Z" fill="currentColor" />
                                    </svg>

                                </div>
                                <div class="status-text">Selesai</div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="" class="my-5">
                    <h5 style="font-size: 24px; font-weight: 700; color: #4682A9;">Informasi Penerima</h5>

                    <input type="hidden" name="id_customer" value="">
                    <input type="hidden" name="id_product" value="">
                    <input type="hidden" name="qty" value="">
                    <input type="hidden" name="status" value="">

                    <div class="mb-3 form-input">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control bg-white" id="nama" value="Agil" disabled>
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
                        <label for="gmaps" class="form-label">Link Google Maps</label>
                        <input type="text" class="form-control" id="gmaps" name="gmaps" placeholder="Masukkan link Google Maps lokasi tujuan" required value="{{ old('gmaps') }}">
                        @error('gmaps')
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
                        <div class="col-8 col-xl-3">
                            <a href="/carts" id="back-button" style="border-radius: 30px;">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0466 7.875C19.0824 7.79527 19.0991 7.70838 19.0956 7.62111H19.125C18.9992 4.61915 16.5205 2.25 13.5056 2.25C10.4906 2.25 8.01194 4.61915 7.88612 7.62111C7.87129 7.7051 7.87129 7.79102 7.88612 7.875H7.79818C6.3565 7.875 4.81539 8.82671 4.36797 11.3851L3.49302 18.3541C2.77715 23.4708 5.41195 24.75 8.8521 24.75H18.1783C21.6085 24.75 24.1637 22.8977 23.5274 18.3541L22.6624 11.3851C22.1354 8.89835 20.6441 7.875 19.2223 7.875H19.0466ZM17.4299 7.875C17.3986 7.79394 17.382 7.70797 17.3809 7.62111C17.3809 5.46393 15.6261 3.71518 13.4615 3.71518C11.2968 3.71518 9.54207 5.46393 9.54207 7.62111C9.5569 7.7051 9.5569 7.79102 9.54207 7.875H17.4299ZM10.2341 13.6671C9.68501 13.6671 9.23986 13.209 9.23986 12.6438C9.23986 12.0786 9.68501 11.6205 10.2341 11.6205C10.7832 11.6205 11.2284 12.0786 11.2284 12.6438C11.2284 13.209 10.7832 13.6671 10.2341 13.6671ZM15.7523 12.6438C15.7523 13.209 16.1974 13.6671 16.7465 13.6671C17.2957 13.6671 17.7408 13.209 17.7408 12.6438C17.7408 12.0786 17.2957 11.6205 16.7465 11.6205C16.1974 11.6205 15.7523 12.0786 15.7523 12.6438Z" fill="currentColor" />
                                </svg>Kembali ke Pesanan
                                </a>
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
    <script src="/js/script.js"></script>
</body>

</html>