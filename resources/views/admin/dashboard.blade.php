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

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/profile/{{ $user->username }}" class="mt-1">
        @method('put')
        @csrf
        <input type="hidden" name="role" value="Admin">
        <div class="position-relative w-100 mt-4">
            <img id="profileImagePreview" src="{{ asset('storage/' . $user->foto_profil) }}" alt="" class="rounded-circle my-3 mx-auto mx-md-0">
            <label for="foto_profil mb-2" class="label">Ubah Foto Profil</label>
            <input type="file" name="foto_profil" id="foto_profil" class="form-control w-100 @error('foto_profil') is-invalid @enderror" onchange="previewImage(event)">
            @error('foto_profil')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
        </div>
        <div class="d-flex flex-column gap-2">
            <label for="nama" class="label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $user->nama ) }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-flex flex-column gap-2 mt-3">
            <label for="username" class="label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username ) }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-flex flex-column gap-2 mt-3">
            <label for="email" class="label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email ) }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="jenis_kelamin" class="label mt-3 mb-2">Jenis Kelamin</label>
        <div class="mb-2">
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Pria" value="Pria"
                    {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Pria' ? 'checked' : '' }}>
                <label class="form-check-label" for="Pria">
                    Pria
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Wanita" value="Wanita"
                    {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Wanita' ? 'checked' : '' }}>
                <label class="form-check-label" for="Wanita">
                    Wanita
                </label>
            </div>
        </div>

        <div class="d-flex flex-column gap-2 my-3">
            <label for="no_hp" class="label">Nomor Handphone</label>
            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required value="{{ old('no_hp', $user->no_hp) }}">
            @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="btn btn-submit w-100 py-2 my-3" type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>