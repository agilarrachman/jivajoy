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

document.querySelector('form[action="/logout"]').addEventListener('submit', function(event) {
    console.log("Form is being submitted");
});


