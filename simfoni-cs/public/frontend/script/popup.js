function tampilkanPopUp() {
  var popup = document.getElementById("popup");
  popup.classList.add("active");
}

// Ambil elemen tombol "Tidak"
const closeButton = document.querySelector('.frame-button-tidak .button-back-konfirmasi-tidak');
// Ambil elemen popup
const popup = document.getElementById('popup');
// Fungsi untuk menutup popup
function closePopup() {
  popup.classList.remove('active');
}
// Tambahkan event listener untuk tombol "Tidak"
closeButton.addEventListener('click', closePopup);