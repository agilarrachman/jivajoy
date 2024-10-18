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
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container-form">
        <div class="content h-100">
            <div class="product" style="margin-top:50px;">
                <img src="img/produk sign-in.png" alt="" class="img-fluid">
            </div>
            <div class="form d-flex flex-column">
                <main class="form-signup my-auto d-flex flex-column">
                    <img src="img/jivajoy logo.png" alt="logo jivajoy" class="img-fluid">
                    <h1 class="h1 mt-3 fw-bold">Lengkapi Data Diri</h1>
                    <p class="p mb-4">Akun Jivajoy Anda berhasil dibuat!
                        Silakan lengkapi data diri untuk melangkah lebih jauh dalam perjalanan anda</p>
                    <form action="/store-profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="email" value="{{ session('email') }}">
                        <input type="hidden" name="password" value="{{ session('password') }}">
                        <input type="hidden" name="role" value="Customer">
                        <div class="col d-flex flex-column w-80">
                            <img id="profileImagePreview" src="img/default profile picture.jpg" alt="" class="rounded-circle mx-auto my-3">
                            <input type="file" name="foto_profil" id="foto_profil" class="form-control mx-auto @error('foto_profil') is-invalid @enderror" onchange="previewImage(event)">
                            @error('foto_profil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" autofocus required value="{{ old('nama') }}">
                            <label for="nama">Nama Lengkap</label>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <label for="jenis_kelamin" class="my-2">Jenis Kelamin</label>
                        <div class="mb-2">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Pria" value="Pria" checked>
                                <label class="form-check-label" for="Pria">
                                    Pria
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Wanita" value="Wanita">
                                <label class="form-check-label" for="Wanita">
                                    Wanita
                                </label>
                            </div>
                        </div>
                        <div class="form-floating my-2">
                            <input type="number" name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Laki-laki" autofocus required value="{{ old('no_hp') }}">
                            <label for="no_hp">Nomor HP</label>
                            @error('no_hp')
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
    <script src="js/index.min.js"></script>
</body>

</html>