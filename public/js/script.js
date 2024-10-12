// Menampilkan Preview Profile Image
function previewImage(event) {
    var reader = new FileReader(); // Create FileReader object
    
    reader.onload = function() {
        var output = document.getElementById('profileImagePreview'); // Get the image preview element
        output.src = reader.result; // Set the src attribute with the file's data
    };

    reader.readAsDataURL(event.target.files[0]); // Read the file as a data URL
}

// Dropdown Nav
document.addEventListener('DOMContentLoaded', function () {
    const profileToggle = document.getElementById('profileToggle');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const logoutForm = document.getElementById('logoutForm');

    // Toggle dropdown visibility on click
    profileToggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown if clicked outside
    window.addEventListener('click', function (e) {
        if (!profileToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.style.display = 'none';
        }
    });

    // Prevent the form from submitting if the dropdown is not open
    logoutForm.addEventListener('submit', function (e) {
        // Pastikan form hanya dapat dikirim jika dropdown terlihat
        if (dropdownMenu.style.display === 'none') {
            e.preventDefault();
        }
    });
});


// Scroll Username
document.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Unblock Submit Form
document.querySelectorAll('form').forEach(function(form) {
    form.addEventListener('submit', function(e) {
        // Mengizinkan semua form untuk di-submit
        e.stopImmediatePropagation(); // Menghentikan event listener lain yang mungkin memblokir submit
        return true; // Mengizinkan form untuk melanjutkan submit
    });
});

// Popup Logout
document.addEventListener("DOMContentLoaded", function () {
    const logoutButton = document.getElementById("logoutButton");
    const logoutSidebar = document.getElementById("logoutSidebar");
    const logoutPopup = document.getElementById("logoutPopup");
    const closeLogoutPopup = document.getElementById("closeLogoutPopup");
    const cancelLogout = document.getElementById("cancelLogout");

    // Tampilkan popup saat tombol logout diklik
    logoutButton.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link melakukan navigasi
        logoutPopup.style.display = "flex"; // Menampilkan popup
    });

    logoutSidebar.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link melakukan navigasi
        logoutPopup.style.display = "flex"; // Menampilkan popup
    });

    // Tutup popup saat tombol close diklik
    closeLogoutPopup.addEventListener("click", function () {
        logoutPopup.style.display = "none"; // Menyembunyikan popup
    });

    // Tutup popup saat tombol Batal diklik
    cancelLogout.addEventListener("click", function () {
        logoutPopup.style.display = "none"; // Menyembunyikan popup
    });

    // Tutup popup saat area di luar popup diklik
    window.addEventListener("click", function (event) {
        if (event.target === logoutPopup) {
            logoutPopup.style.display = "none"; // Menyembunyikan popup
        }
    });
});

// Popup Delete Account
document.addEventListener("DOMContentLoaded", function () {
    const deleteAccountButton = document.getElementById("deleteAccountButton");
    const deleteAccountSidebar = document.getElementById("deleteAccountSidebar");
    const deleteAccountPopup = document.getElementById("deleteAccountPopup");
    const closeDeleteAccountPopup = document.getElementById("closeDeleteAccountPopup");
    const cancelDeleteAccount = document.getElementById("cancelDeleteAccount");

    // Tampilkan popup saat tombol logout diklik
    deleteAccountButton.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link melakukan navigasi
        deleteAccountPopup.style.display = "flex"; // Menampilkan popup
    });

    deleteAccountSidebar.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link melakukan navigasi
        deleteAccountPopup.style.display = "flex"; // Menampilkan popup
    });

    // Tutup popup saat tombol close diklik
    closeDeleteAccountPopup.addEventListener("click", function () {
        deleteAccountPopup.style.display = "none"; // Menyembunyikan popup
    });

    // Tutup popup saat tombol Batal diklik
    cancelDeleteAccount.addEventListener("click", function () {
        deleteAccountPopup.style.display = "none"; // Menyembunyikan popup
    });

    // Tutup popup saat area di luar popup diklik
    window.addEventListener("click", function (event) {
        if (event.target === deleteAccountPopup) {
            deleteAccountPopup.style.display = "none"; // Menyembunyikan popup
        }
    });
});

