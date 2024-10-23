@auth
<div id="deleteAccountPopup" class="popup" style="display: none;">
    <div class="popup-content mx-5 py-3 px-3 py-md-4 px-md-5">
        <span class="close" id="closeDeleteAccountPopup">&times;</span>
        <img src="/img/Jivajoy logo.png" alt="Jivajoy Logo" class="img-fluid mb-4">
        <h4>Apakah Anda yakin ingin menghapus akun Anda?</h4>
        <div class="btn-popup d-flex mt-4">
            <button id="cancelDeleteAccount" class="cancel me-2 py-3 px-2 px-md-3">Batal</button>
            <form action="/profile/{{ auth()->user()->username }}" method="post" class="ms-2">
                @method('delete')
                @csrf
                <button type="submit" class="py-3 px-2 px-md-3 w-100">
                    Ya, Hapus Akun
                </button>
            </form>
        </div>
    </div>
</div>

<div id="logoutPopup" class="popup" style="display: none;">
    <div class="popup-content mx-5 py-4 px-3 py-md-4 px-md-5">
        <span class="close" id="closeLogoutPopup">&times;</span>
        <img src="/img/Jivajoy logo.png" alt="Jivajoy Logo" class="img-fluid mb-4">
        <h4>Apakah Anda yakin ingin keluar dari akun Anda?</h4>
        <div class="btn-popup d-flex mt-4">
            <button id="cancelLogout" class="cancel me-2 py-3 px-2 px-md-3">Batal</button>
            <form action="/logout" method="post" class="ms-2">
                @csrf
                <button type="submit" class="px-2 py-3 px-md-3 w-100">
                    Ya, Keluar
                </button>
            </form>
        </div>
    </div>
</div>
@else
@endauth