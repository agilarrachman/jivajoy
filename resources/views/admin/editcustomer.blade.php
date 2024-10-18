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
    <meta name="description"
        content="Aromaterapi 2in1 (Inhaler & Roll On) dari Kemangi dan Cendana Sebagai Upaya Mencegah Baby Blues dengan Kemasan Website Terintegrasi">
    <title>JivaJoy Admin | Edit Customer</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/formcustomer.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
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
                    <li class="breadcrumb-item"><a href="/dashboard/customers">Data Customer</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                </ol>
            </nav>

            <h1>Edit Data Customer</h1>

            <form action="/dashboard/customers/{{ $customer->username }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="col d-flex flex-column w-80">
                    <img id="profileImagePreview" src="{{ asset('storage/' . $customer->foto_profil) }}" alt="" class="rounded-circle my-3">
                    <input type="file" name="foto_profil" id="foto_profil" class="form-control mx-auto @error('foto_profil') is-invalid @enderror" onchange="previewImage(event)">
                    @error('foto_profil')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <div id="rulesProfileImage" class="form-text mb-4">Silakan unggah gambar profil dengan format file gambar (jpeg, png, jpg, gif) dan ukuran maksimum 5 MB</div>
                </div>
                <div class="form-floating my-3">
                    <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" autofocus required value="{{ old('nama', $customer->nama ) }}">
                    <label for="nama">Nama Lengkap</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating my-3">
                    <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username', $customer->username ) }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating my-3">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email', $customer->email ) }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="mb-2">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="Pria" value="Pria" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'Pria' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Pria">
                            Pria
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="Wanita" value="Wanita" {{ old('jenis_kelamin', $customer->jenis_kelamin) == 'Wanita' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Wanita">
                            Wanita
                        </label>
                    </div>
                </div>

                <div class="form-floating my-3">
                    <input type="number" name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Laki-laki" autofocus required value="{{ old('no_hp', $customer->no_hp) }}">
                    <label for="no_hp">Nomor HP</label>
                    @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="" disabled>Pilih Role</option>
                        <option value="Admin" {{ old('role', $customer->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Customer" {{ old('role', $customer->role) == 'Customer' ? 'selected' : '' }}>Customer</option>
                    </select>
                </div>
                <a href="/dashboard/customers" class="btn btn-secondary btn-rounded my-3" style="border-radius: 30px;">Batal</a>
                <button class="btn py-2 my-3 btn-rounded" type="submit" id="buttonPrimary">Simpan Perubahan</button>
            </form>
        </div>
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBLuB8sA8L1hMIdHqGfhSNIYTFu9zGTx93sG4aRl7czb/ZZu" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-kT04WfFiP8HHRRrCq2vnLUyKiRLifclq4S8tx5OlMZV6S5LZYhUbo2B1H4/nvMzO" crossorigin="anonymous"></script>

    <script>
        function previewImage(event) {
            var reader = new FileReader(); // Create FileReader object

            reader.onload = function() {
                var output = document.getElementById('profileImagePreview'); // Get the image preview element
                output.src = reader.result; // Set the src attribute with the file's data
            };

            reader.readAsDataURL(event.target.files[0]); // Read the file as a data URL
        }
    </script>
</body>

</html>