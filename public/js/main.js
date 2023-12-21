const termServiceLink = document.getElementById('term-service-link');

// Ambil elemen pop-up dan tombol exit
const popup = document.getElementById('popup');
const exit = document.getElementById('exit');

// Tambahkan event listener untuk saat link di-klik
termServiceLink.addEventListener('click', function(event) {
    event.preventDefault(); // Menghentikan aksi default dari link
    popup.style.display = 'block'; // Tampilkan pop-up box
});

// Tambahkan event listener untuk tombol exit
exit.addEventListener('click', function() {
    popup.style.display = 'none'; // Sembunyikan pop-up box saat tombol exit diklik
});
document.addEventListener("DOMContentLoaded", function() {
    const registerForm = document.getElementById("register-form");

    registerForm.addEventListener("submit", function(event) {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("pass").value;
        const rePassword = document.getElementById("re_pass").value;
        const agreeTerm = document.getElementById("agree-term").checked;

        if (name.trim() === '' || email.trim() === '' || password.trim() === '' || rePassword.trim() === '' || !agreeTerm) {
            event.preventDefault(); // Menghentikan pengiriman formulir

            alert("Harap isi semua bidang dan centang kotak 'Saya setuju' sebelum mendaftar.");
        } else if (password !== rePassword) {
            event.preventDefault(); // Menghentikan pengiriman formulir

            alert("Password dan konfirmasi password tidak cocok. Harap periksa kembali.");
        }
    });
});
