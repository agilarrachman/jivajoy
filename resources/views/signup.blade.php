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
    <title> JivaJoy | Sign Up </title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/signup.css" />
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
                    <h1 class="h1 mt-3 fw-bold">Registrasi</h1>
                    <p class="p mb-3">Mulailah perjalanan anda bersama kami dengan mendaftar akun jivajoy!</p>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating my-3">
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating my-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating my-3">
                            <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Konfirmasi Password">
                            <label for="confirm-password">Konfirmasi Password</label>
                        </div>
                        <button class="btn w-100 py-2 my-3" type="submit">Registrasi</button>
                    </form>
                    <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login" class="fw-semibold">Masuk</a></small>
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>