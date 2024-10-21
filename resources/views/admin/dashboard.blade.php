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
    <title>JivaJoy Admin | Dashboard</title>

    <!-- Fonts and Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #868E8C;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #cfdee8;
            /* Light color for sidebar */
            padding: 20px;
        }

        .sidebar img {
            width: 100%;
            max-width: 150px;
            /* Limit the logo size */
            margin: 0;
            display: block;
        }

        .sidebar a {
            color: #4380a8;
            /* Font color */
            padding: 15px 20px;
            text-decoration: none;
            display: block;
        }

        .sidebar .menu:hover {
            border-radius: 30px;
            background-color: #4380a8;
            /* Background color on hover */
            color: white;
            /* Font color on hover */
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .stat-box {
            border-radius: 8px;
            padding: 20px;
            color: white;
        }

        .bg-blue {
            background-color: #007bff;
        }

        .bg-green {
            background-color: #28a745;
        }

        .bg-orange {
            background-color: #fd7e14;
        }

        .navbar {
            background-color: #ffffff;
        }

        .navbar-brand,
        .nav-link,
        .dropdown-item {
            color: #000 !important;
        }

        .dropdown-menu {
            background-color: #ffffff;
            border: 1px solid #eaeaea;
        }

        .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }

        @media (min-width: 769px) {
            .dropdown-menu {
                right: 0;
                left: auto;
            }
        }

        .popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .popup-content {
            background: white;
            border-radius: 5px;
            width: auto;
            text-align: center;
        }

        .popup img {
            width: 100px;
            margin: auto;
        }

        .close {
            float: right;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn {
            margin: 5px;
        }

        .popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .popup-content {
            background: white;
            border-radius: 5px;
            width: auto;
            text-align: center;
        }

        .popup img {
            width: 100px;
            margin: auto;
        }

        .close {
            float: right;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn {
            margin: 5px;
        }

        .popup .cancel {
            background-color: #4682A9;
            color: white;
            border-radius: 8px;
            width: 100%;
            font-weight: 500;
        }

        .popup .cancel:hover {
            background-color: #28668f;
        }

        .popup form {
            width: 100%;
        }

        .popup form button {
            background-color: #E6E5E5;
            color: #556260;
            border-radius: 8px;
            width: 100%;
            font-weight: 500;
        }

        .popup form button:hover {
            background-color: #c2c2c2;
        }

        .popup h4 {
            font-family: NunitoSans, sans-serif;
            color: #4682A9;
            font-weight: 700;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <header class="header d-flex align-items-center justify-content-end p-3" style="z-index: -1;">
        <div class="container d-flex justify-content-end align-items-center">
            <!-- Profile Dropdown -->
            <div class="dropdown">
                <img src="{{ asset('storage/' . auth()->user()->foto_profil) }}" class="rounded-circle" alt="Foto Profil" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; object-fit: cover;">
            </div>
        </div>
    </header>

    <!-- Pastikan Bootstrap 5 sudah disertakan untuk fungsi dropdown -->


    @include('partials.sidebar')

    <!-- Main Content -->
    <div class="content">
        <div class="container mt-4">
            <p style="color: #4380a8; margin-bottom: 20px;">Selamat datang, <span style="color: #4380a8;">{{ auth()->user()->nama }}</span></p>
            <h1 style="color: #4380a8; margin-bottom: 10px;">Admin Dashboard JivaJoy</h1>

            <!-- Statistics Section -->
            <div class="row mt-4">
                <div class="col" style="min-width: 260px;">
                    <div class="card border-info mb-3" style="max-width: 18rem; background-color: #ffffff;">
                        <div class="card-header" style="background-color: #cfdee8; color: #4380a8;">Jumlah Customer Aktif</div>
                        <div class="card-body text-info">
                            <h5 class="card-title" style="color: #4380a8; font-size: 2rem;">{{ number_format($customerCount) }}</h5>
                            <p class="card-text">Jumlah Customer Aktif</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info mb-3" style="max-width: 18rem; background-color: #ffffff; min-width: 260px;">
                        <div class="card-header" style="background-color: #cfdee8; color: #4380a8;">Jumlah Pemesanan</div>
                        <div class="card-body text-info">
                            <h5 class="card-title" style="color: #4380a8; font-size: 2rem;">500</h5>
                            <p class="card-text">Jumlah Pemesanan</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info mb-3" style="max-width: 18rem; background-color: #ffffff;">
                        <div class="card-header" style="background-color: #cfdee8; color: #4380a8;">Jivajoy Warm</div>
                        <div class="card-body text-info">
                            <h5 class="card-title" style="color: #4380a8; font-size: 2rem;">{{ $warmStock }}</h5>
                            <p class="card-text">Stok Tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info mb-3" style="max-width: 18rem; background-color: #ffffff;">
                        <div class="card-header" style="background-color: #cfdee8; color: #4380a8;">Jivajoy Hot</div>
                        <div class="card-body text-info">
                            <h5 class="card-title" style="color: #4380a8; font-size: 2rem;">{{ $hotStock }}</h5>
                            <p class="card-text">Stok Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales Chart -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <canvas id="salesChart" style="height: 300px;"></canvas>
                </div>
            </div>

            <script>
                const ctx = document.getElementById('salesChart').getContext('2d');
                const salesChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [{
                            label: 'Total Penjualan',
                            data: [1200, 1900, 3000, 2500, 2200, 2900], // Sample sales data
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>

    @include('partials.popup')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb+7fIjfH5DoVZESpPpMZ8KnwxBqPe3/Ql2TPTD2A4JmO4SQc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-UGxXeHBL/JIVhBL0P04j+ik09ETElbElD70JxlAqZT5h6owVu0T/Sv6x5BYafJNh" crossorigin="anonymous"></script>

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