<!doctype html>
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
    <title> JivaJoy | Akun Profil</title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            width: 90%;
            margin-top: 20px;
        }

        .svg-active {
            color: #4682A9;
        }

        .svg-inactive {
            color: #868E8C;
        }

        .btn-side {
            color: #868E8C;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        }

        .btn-side:hover {
            color: #868E8C;
            font-size: 16px;
            font-weight: 600;
            padding: 10px;
        }

        .btn-active {
            color: #4682A9;
        }

        .btn-active:hover {
            color: #4682A9;
        }

        h1 {
            font-size: 40px;
            font-weight: 600;
            color: #4682A9;
        }

        .label {
            font-size: 16px;
            font-weight: 600;
        }

        .form-control {
            font-size: 16px;
        }

        .btn-submit {
            background-color: #4682A9;
            color: white;
        }

        .btn-submit:hover {
            background-color: #316384;
            color: white;
        }

        .img-cc {
            width: 178px;
            height: 178px;
        }

        .img-cc2 {
            width: 100px;
            height: 100px;
        }

        .position-relative {
            width: 178px;
        }

        .title-product {
            font-weight: 600;
            color: #4682A9;
            font-size: 20px;
        }

        .price {
            font-size: 18px;
            font-weight: 600;
            color: #4682A9;
        }

        .title-price {
            color: #868E8C;
        }

        .btn-bucket {
            font-size: 14px;
            font-weight: 700;
            color: #4682A9;
            border: 1px solid #4682A9;
        }

        .btn-bucket:hover {
            font-size: 14px;
            font-weight: 700;
            color: #4682A9;
            border: 1px solid #4682A9;
        }

        .btn-checkout {
            background-color: #4682A9;
            color: white;
            width: 320px;
        }

        .btn-checkout:hover {
            background-color: #4682A9;
            color: white;
            width: 320px;
        }

        .on-proses {
            color: white;
            background-color: #4682A9;
            width: fit-content;
            font-size: 14px;
            font-weight: 500;
        }

        .not-pay {
            color: #4682A9;
            background-color: #E4E4E4;
            width: fit-content;
            font-size: 14px;
            font-weight: 500;
        }

        .toggle {
            width: 100%;
            color: #868E8C;
            font-weight: 700;
            padding-bottom: 16px;
        }

        .toggle-active {
            color: #4682A9;
            border-bottom: 2px solid #4682A9;
            padding-bottom: 16px;
            border-radius: 0px;
        }

        .toggle-active:hover {
            color: #4682A9;
            border-bottom: 2px solid #4682A9;
            padding-bottom: 16px;
            border-radius: 0px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('partials.navbar')
    <div class="container" id="container-profile">
        <div class="row flex-md-row flex-sm-column">
            <div class="col-md-3 mb-5 w-sm-100 d-none d-md-flex flex-column">
                <div class="d-flex flex-column gap-3">
                    <a href="/profile">
                        <button id="btn-open-profil" type="button" class="btn-side btn-active btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3384 9.41826C22.3384 13.2119 19.2967 16.2538 15.5003 16.2538C11.7053 16.2538 8.66226 13.2119 8.66226 9.41826C8.66226 5.6246 11.7053 2.58398 15.5003 2.58398C19.2967 2.58398 22.3384 5.6246 22.3384 9.41826ZM15.5003 28.4173C9.89756 28.4173 5.16699 27.5067 5.16699 23.9933C5.16699 20.4787 9.92728 19.6003 15.5003 19.6003C21.1044 19.6003 25.8337 20.5109 25.8337 24.0243C25.8337 27.539 21.0734 28.4173 15.5003 28.4173Z" fill="currentColor" />
                            </svg>
                            Akun Profil
                        </button>
                    </a>
                    <a href="/carts">
                        <button id="btn-open-bucket" type="button" class="btn-side btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4745 13.106H19.7037C20.1933 13.106 20.578 12.7012 20.578 12.213C20.578 11.713 20.1933 11.3201 19.7037 11.3201H16.4745C15.9849 11.3201 15.6002 11.713 15.6002 12.213C15.6002 12.7012 15.9849 13.106 16.4745 13.106ZM23.539 6.91606C24.2501 6.91606 24.7164 7.16608 25.1827 7.71376C25.649 8.26143 25.7306 9.04722 25.6257 9.76039L24.5182 17.5707C24.3084 19.072 23.0494 20.1781 21.5689 20.1781H8.85046C7.3 20.1781 6.01767 18.9649 5.88944 17.3933L4.81694 4.41462L3.05664 4.10507C2.59034 4.02173 2.26393 3.55739 2.34553 3.08116C2.42713 2.5942 2.88178 2.27155 3.35974 2.34418L6.14007 2.7716C6.53643 2.84423 6.82787 3.1764 6.86284 3.58121L7.08434 6.24814C7.11931 6.63032 7.42241 6.91606 7.79545 6.91606H23.539ZM8.66371 22.0598C7.68447 22.0598 6.89175 22.8694 6.89175 23.8695C6.89175 24.8577 7.68447 25.6673 8.66371 25.6673C9.63129 25.6673 10.424 24.8577 10.424 23.8695C10.424 22.8694 9.63129 22.0598 8.66371 22.0598ZM21.7785 22.0598C20.7992 22.0598 20.0065 22.8694 20.0065 23.8695C20.0065 24.8577 20.7992 25.6673 21.7785 25.6673C22.7461 25.6673 23.5388 24.8577 23.5388 23.8695C23.5388 22.8694 22.7461 22.0598 21.7785 22.0598Z" fill="currentColor" />
                            </svg>
                            Keranjang Saya
                        </button>
                    </a>
                    <a href="/orders">
                        <button id="btn-open-history" type="button" class="btn-side btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0466 7.875C19.0824 7.79527 19.0991 7.70838 19.0956 7.62111H19.125C18.9992 4.61915 16.5205 2.25 13.5056 2.25C10.4906 2.25 8.01194 4.61915 7.88612 7.62111C7.87129 7.7051 7.87129 7.79102 7.88612 7.875H7.79818C6.3565 7.875 4.81539 8.82671 4.36797 11.3851L3.49302 18.3541C2.77715 23.4708 5.41195 24.75 8.8521 24.75H18.1783C21.6085 24.75 24.1637 22.8977 23.5274 18.3541L22.6624 11.3851C22.1354 8.89835 20.6441 7.875 19.2223 7.875H19.0466ZM17.4299 7.875C17.3986 7.79394 17.382 7.70797 17.3809 7.62111C17.3809 5.46393 15.6261 3.71518 13.4615 3.71518C11.2968 3.71518 9.54207 5.46393 9.54207 7.62111C9.5569 7.7051 9.5569 7.79102 9.54207 7.875H17.4299ZM10.2341 13.6671C9.68501 13.6671 9.23986 13.209 9.23986 12.6438C9.23986 12.0786 9.68501 11.6205 10.2341 11.6205C10.7832 11.6205 11.2284 12.0786 11.2284 12.6438C11.2284 13.209 10.7832 13.6671 10.2341 13.6671ZM15.7523 12.6438C15.7523 13.209 16.1974 13.6671 16.7465 13.6671C17.2957 13.6671 17.7408 13.209 17.7408 12.6438C17.7408 12.0786 17.2957 11.6205 16.7465 11.6205C16.1974 11.6205 15.7523 12.0786 15.7523 12.6438Z" fill="currentColor" />
                            </svg>
                            Riwayat Pemesanan
                        </button>
                    </a>
                    <a href="/password">
                        <button id="btn-open-profil" type="button" class="btn-side btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 19.6875C14.0967 19.6875 14.669 19.4504 15.091 19.0285C15.5129 18.6065 15.75 18.0342 15.75 17.4375C15.75 16.8408 15.5129 16.2685 15.091 15.8465C14.669 15.4246 14.0967 15.1875 13.5 15.1875C12.9033 15.1875 12.331 15.4246 11.909 15.8465C11.4871 16.2685 11.25 16.8408 11.25 17.4375C11.25 18.0342 11.4871 18.6065 11.909 19.0285C12.331 19.4504 12.9033 19.6875 13.5 19.6875ZM20.25 9.5625C20.8467 9.5625 21.419 9.79955 21.841 10.2215C22.2629 10.6435 22.5 11.2158 22.5 11.8125V23.0625C22.5 23.6592 22.2629 24.2315 21.841 24.6535C21.419 25.0754 20.8467 25.3125 20.25 25.3125H6.75C6.15326 25.3125 5.58097 25.0754 5.15901 24.6535C4.73705 24.2315 4.5 23.6592 4.5 23.0625V11.8125C4.5 11.2158 4.73705 10.6435 5.15901 10.2215C5.58097 9.79955 6.15326 9.5625 6.75 9.5625H7.875V7.3125C7.875 5.82066 8.46763 4.38992 9.52252 3.33502C10.5774 2.28013 12.0082 1.6875 13.5 1.6875C14.2387 1.6875 14.9701 1.83299 15.6526 2.11568C16.3351 2.39836 16.9551 2.81269 17.4775 3.33502C17.9998 3.85735 18.4141 4.47745 18.6968 5.15991C18.9795 5.84236 19.125 6.57381 19.125 7.3125V9.5625H20.25ZM13.5 3.9375C12.6049 3.9375 11.7464 4.29308 11.1135 4.92601C10.4806 5.55895 10.125 6.41739 10.125 7.3125V9.5625H16.875V7.3125C16.875 6.41739 16.5194 5.55895 15.8865 4.92601C15.2536 4.29308 14.3951 3.9375 13.5 3.9375Z" fill="currentColor" />
                            </svg>
                            Ganti Password
                        </button>
                    </a>
                    <a href="#" id="deleteAccountSidebar">
                        <button type="button" class="btn-side btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.823 5.89834C23.2607 5.89834 23.625 6.26171 23.625 6.72408V7.15158C23.625 7.6027 23.2607 7.97732 22.823 7.97732H4.17809C3.73934 7.97732 3.375 7.6027 3.375 7.15158V6.72408C3.375 6.26171 3.73934 5.89834 4.17809 5.89834H7.45826C8.12458 5.89834 8.70447 5.42472 8.85436 4.75647L9.02614 3.98923C9.2931 2.94412 10.1717 2.25 11.1772 2.25H15.8228C16.8174 2.25 17.7058 2.94412 17.9629 3.93411L18.1467 4.75535C18.2955 5.42472 18.8754 5.89834 19.5428 5.89834H22.823ZM21.1566 21.5258C21.499 18.3342 22.0986 10.7518 22.0986 10.6753C22.1205 10.4435 22.045 10.2241 21.8951 10.0475C21.7342 9.88215 21.5307 9.78428 21.3064 9.78428H5.70209C5.4767 9.78428 5.26225 9.88215 5.11345 10.0475C4.96246 10.2241 4.88806 10.4435 4.899 10.6753C4.90101 10.6893 4.92253 10.9564 4.95849 11.4029C5.11828 13.3866 5.56331 18.9114 5.85089 21.5258C6.05439 23.4518 7.3181 24.6623 9.14857 24.7061C10.5611 24.7388 12.0163 24.75 13.5043 24.75C14.9058 24.75 16.3293 24.7388 17.7856 24.7061C19.6795 24.6735 20.9421 23.4844 21.1566 21.5258Z" fill="currentColor" />
                            </svg>
                            Hapus Akun
                        </button>
                    </a>
                    <a href="#" id="logoutSidebar">
                        <button type="submit" class="btn-side btn text-start px-4 py-3 rounded-4 shadow-sm d-flex items-center gap-2 border">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1015 8.50496V3.82777C13.1015 3.33045 13.4981 2.91602 13.9998 2.91602C14.449 2.91602 14.8295 3.26426 14.8898 3.70536L14.8981 3.82777V8.50496L20.4747 8.50531C23.2513 8.50531 25.5326 10.7791 25.6607 13.6148L25.6663 13.8665V19.7456C25.6663 22.6012 23.4644 24.9452 20.729 25.0769L20.4863 25.0827H7.51301C4.73634 25.0827 2.46611 22.8203 2.33865 19.9741L2.33301 19.7215L2.33301 13.8544C2.33301 10.9988 4.5239 8.64343 7.25867 8.51117L7.50134 8.50531H13.1013V15.9748L11.2347 14.0472C10.8847 13.6857 10.313 13.6857 9.96301 14.0472C9.78801 14.2279 9.70634 14.4688 9.70634 14.7098C9.70634 14.8929 9.75861 15.0837 9.86911 15.2453L9.96301 15.3603L13.358 18.8782C13.5213 19.0589 13.7547 19.1553 13.9997 19.1553C14.1941 19.1553 14.3886 19.0884 14.5425 18.9615L14.6297 18.8782L18.0247 15.3603C18.3747 14.9989 18.3747 14.4086 18.0247 14.0472C17.7065 13.7186 17.2051 13.6887 16.8536 13.9576L16.753 14.0472L14.898 15.9748V8.50531L13.1015 8.50496Z" fill="currentColor" />
                            </svg>
                            Keluar Akun
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-9 w-md-60 m-sm-auto w-sm-100">
                <div id="section-profil" class="px-md-5 pt-0 w-100">
                    @if(session()->has('success'))
                    <div class="alert alert-success col-lg-10" role="alert">{{ session('success') }}</div>
                    @endif
                    <h1 class="heading fw-bold">Akun Profil</h1>
                    <form method="post" action="/profile/{{ $user->username }}" class="mt-1" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="role" value="Customer">
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
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.popup')

    <script src="js/common.min.js"></script>
    <script src="js/index.min.js"></script>
    <script src="js/script.js"></script>
</body>

<script asyn>
    function openOnProgres() {
        document.getElementById("proses-product").classList.remove("d-none")
        document.getElementById("finish-product").classList.add("d-none")
        document.getElementById("btn-on-progres").classList.add("toggle-active")
        document.getElementById("btn-finish").classList.remove("toggle-active")
    }

    function openFinish() {
        document.getElementById("proses-product").classList.add("d-none")
        document.getElementById("finish-product").classList.remove("d-none")
        document.getElementById("btn-on-progres").classList.remove("toggle-active")
        document.getElementById("btn-finish").classList.add("toggle-active")
    }
</script>

</html>