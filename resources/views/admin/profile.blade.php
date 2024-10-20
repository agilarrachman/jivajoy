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
    <title>JivaJoy Admin | Data Admin</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/popup.css" />
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
                    <li class="breadcrumb-item active" aria-current="page">Pengaturan Profile</li>
                </ol>
            </nav>

            <h1 style="color: #4380a8; margin-bottom: 10px;">Detail Admin</h1>

            <div class="mt-4">
                <form>
                    <img id="profileImagePreview" src="{{ asset('storage/' . auth()->user()->foto_profil ) }}" alt="" class="rounded-circle my-3" style="width: 140px; height: 140px; object-fit:cover;">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" value="{{ auth()->user()->username }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" value="{{ auth()->user()->nama }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="phone" value="{{ auth()->user()->no_hp }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" value="{{ auth()->user()->jenis_kelamin }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" disabled>
                            <option selected>{{ auth()->user()->role }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Bergabung</label>
                        <input type="text" class="form-control" id="date" value="{{ auth()->user()->created_at }}" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.popup')

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ux8wzG9GCrnL2NFO1Q9V2BTcp8lELP2HIWjIHg7jLSX0FGS/ECMSE4RhM8YyD3Z0" crossorigin="anonymous"></script>
    <script src="js/preload.min.js"></script>
    <script src="js/libs.min.js"></script>
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
</body>

</html>