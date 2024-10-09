<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="JivaJoy" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://jivajoy.id/" />
    <!-- <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" /> -->
    <meta property="og:description"
        content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi" />
    <meta name="description" content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi">
    <title> JivaJoy | Input Data Diri </title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/create-profile.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-form">
        <div class="content h-100">
            <div class="product my-auto">
                <img src="img/produk sign-in.png" alt="" class="img-fluid">
            </div>
            <div class="form d-flex flex-column">
                <main class="form-signup my-auto d-flex flex-column">
                    <img src="img/jivajoy logo.png" alt="logo jivajoy" class="img-fluid">
                    <h1 class="h1 mt-3 fw-bold">Lengkapi Data Diri</h1>
                    <p class="p mb-4">Akun Jivajoy Anda berhasil dibuat!
                        Silakan lengkapi data diri untuk melangkah lebih jauh dalam perjalanan anda</p>
                    <form action="/register" method="post">
                        @csrf
                        <div class="col d-flex flex-column">
                            <img src="img/marsya.jpg" alt="" class="rounded-circle mx-auto my-3">
                            <input type="file" name="profile_image" id="profile_image" class="form-control w-80 mx-auto mb-4">
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="name@example.com" autofocus required value="{{ old('nama') }}">
                            <label for="nama">Nama Lengkap</label>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating my-2">
                            <input type="number" name="nohp" class="form-control  @error('nohp') is-invalid @enderror" id="nohp" placeholder="name@example.com" autofocus required value="{{ old('nohp') }}">
                            <label for="nohp">Nomor HP</label>
                            @error('nohp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row w-100 mx-auto">
                            <div class="col-md-6 pe-md-3 my-1 px-0">
                                <div class="select-input w-100">
                                    <label for="kecamatan" class="mb-2">Provinsi</label>
                                    <select class="form-select w-100" aria-label="Default select example">
                                        <option selected>Pilih provinsi</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Bogor Selatan">Bogor Selatan</option>
                                        <option value="Bogor Tengah">Bogor Tengah</option>
                                        <option value="Bogor Timur">Bogor Timur</option>
                                        <option value="Bogor Utara">Bogor Utara</option>
                                        <option value="Tanah Sereal">Tanah Sereal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 my-1 px-0">
                                <div class="select-input w-100">
                                    <label for="kecamatan" class="mb-2">Kota/Kabupaten</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Kota/Kabupaten</option>
                                        <option value="Kota Bogor">Kota Bogor</option>
                                        <option value="Bogor Selatan">Bogor Selatan</option>
                                        <option value="Bogor Tengah">Bogor Tengah</option>
                                        <option value="Bogor Timur">Bogor Timur</option>
                                        <option value="Bogor Utara">Bogor Utara</option>
                                        <option value="Tanah Sereal">Tanah Sereal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row w-100 mx-auto">
                            <div class="col-md-4 pe-md-3 px-0 my-1">
                                <div class="select-input">
                                    <label for="kecamatan" class="mb-2">Kecamatan</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih kecamatan</option>
                                        <option value="Bogor Barat">Bogor Barat</option>
                                        <option value="Bogor Selatan">Bogor Selatan</option>
                                        <option value="Bogor Tengah">Bogor Tengah</option>
                                        <option value="Bogor Timur">Bogor Timur</option>
                                        <option value="Bogor Utara">Bogor Utara</option>
                                        <option value="Tanah Sereal">Tanah Sereal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pe-md-3 px-0 my-1">
                                <div class="select-input">
                                    <label for="kecamatan" class="mb-2">Kelurahan</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih kelurahan</option>
                                        <option value="Loji">Loji</option>
                                        <option value="Bogor Selatan">Bogor Selatan</option>
                                        <option value="Bogor Tengah">Bogor Tengah</option>
                                        <option value="Bogor Timur">Bogor Timur</option>
                                        <option value="Bogor Utara">Bogor Utara</option>
                                        <option value="Tanah Sereal">Tanah Sereal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 px-0 my-1">
                                <label for="kode_pos" class="form-label my-0 mb-2">Kode Pos</label>
                                <input type="number" name="kode_pos" class="form-control  @error('kode_pos') is-invalid @enderror" id="kode_pos" placeholder="Kode Pos" autofocus required value="{{ old('kode_pos') }}">
                                @error('kode_pos')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-area w-100 my-1">
                            <label for="detail_alamat" class="form-label my-0 mb-2">Detail Alamat</label>
                            <textarea name="detail_alamat" class="form-control @error('kod_pos') is-invalid @enderror" id="detail_alamat" placeholder="Contoh: Nama Jalan, Gedung, No. Rumah, Blok/Unit, Patokan" autofocus required>{{ old('detail_alamat') }}</textarea>
                            @error('detail_alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="btn w-100 py-2 my-3" type="submit">Simpan Data Diri</button>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>