<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5">
    <img src="{{ asset('storage/' . auth()->user()->foto_profil) }}" alt="Foto Profil" class="rounded-circle me-1" style="width: 200px; height: 200px; object-fit:cover;">
    <h4>Hai, {{ auth()->user()->nama }}</h4>
    <h1>Selamat Datang di Halaman Admin</h1>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn-side btn text-start p-3 rounded-4 shadow-sm d-flex items-center gap-3 border">
            Keluar Akun
        </button>
    </form>
</body>

</html>