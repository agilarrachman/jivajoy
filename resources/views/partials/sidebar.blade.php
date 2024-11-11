<div class="sidebar">
    <a href="/dashboard" style="background-color: none">
        <img src="{{asset('img/jivajoy logo nobg.png')}}" alt="JivaJoy Logo">
    </a>
    <a href="/dashboard" class="menu {{ ($active === 'Beranda') ? 'active' : '' }}">Dashboard</a>
    <a href="/dashboard/customers" class="menu {{ ($active === 'Customer') ? 'active' : '' }}">Data Customer</a>
    <a href="/dashboard/admin" class="menu {{ ($active === 'Admin') ? 'active' : '' }}">Data Admin</a>
    <a href="/dashboard/products" class="menu {{ ($active === 'Produk') ? 'active' : '' }}">Data Produk</a>
    <a href="/dashboard/carts" class="menu {{ ($active === 'Keranjang') ? 'active' : '' }}">Data Keranjang</a>
    <a href="/dashboard/orders" class="menu {{ ($active === 'Pesanan') ? 'active' : '' }}">Data Pesanan</a>
    <a href="/dashboard/profile" class="menu {{ ($active === 'Profil') ? 'active' : '' }}">Pengaturan Profil</a>
    <a href="#" id="logoutButton">Keluar Akun</a>
    <a href="#" id="deleteAccountButton">Hapus Akun</a>
</div>