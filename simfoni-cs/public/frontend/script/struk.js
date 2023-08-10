function tampilkanPopUp() {
  var popup = document.getElementById("popup");
  popup.classList.add("active");

  // Mengatur waktu countdown sebelum menutup pop-up
  var waktu = 5;
  var countdownElement = document.getElementById("countdown");
  countdownElement.textContent = waktu;

  var countdownInterval = setInterval(function () {
    waktu--;
    countdownElement.textContent = waktu;
    if (waktu <= 0) {
      tutupPopUp();
      beralihHalaman();
      clearInterval(countdownInterval); // Menghentikan interval setelah countdown selesai
    }
  }, 1000); // Mengatur interval menjadi 1000ms (1 detik)
}

function tutupPopUp() {
  var popup = document.getElementById("popup");
  popup.classList.remove("active");
}

function beralihHalaman() {
  // Ganti "halaman_utama.html" dengan nama halaman utama Anda
  window.location.href = "/";
}