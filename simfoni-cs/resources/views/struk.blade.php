<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Struk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="frontend/styles/style.css" />
  </head>
  <body>
    <div>
      <link href="frontend/styles/struk.css" rel="stylesheet" />

      <div class="frame-logo">
        <div class="frame-gambar-text">
          <img src="./frontend/assets/logo.png" alt="" class="logo-gambar" />
          <div class="text-logo">
            <p class="font-logo">
              PT BPR MADANI SEJAHTERA ABADI
            </p>
          </div>
        </div>
      </div>
    
      <div class="c_slip-frame03">
        <div class="slip-slip-setoran-perorangan-container">
          <div class="slip-slip-setoran-perorangan-form">
            <div class="slip-slip-setoran-perorangan-frame">
              <span class="slip-slip-setoran-perorangan-text">
                <span>Struk Digital</span>
              </span>
              <div class="slip-slip-setoran-perorangan-content">
                <div class="slip-slip-setoran-perorangan-struk-card">
                  <div class="slip-slip-setoran-perorangan-error-form">
                    <span class="slip-slip-setoran-perorangan-text02">
                      <span>001</span>
                    </span>
                  </div>
                  <span
                    class="slip-slip-setoran-perorangan-text04 ButtonMedium-16"
                  >
                    <span>No. Antrian</span>
                  </span>
                  <span class="slip-slip-setoran-perorangan-text06">
                    <span>22 Juni 2023 | 08:27:00</span>
                  </span>
                  <img
                    src="frontend\assets\QRcode.svg"
                    alt="QRCodesvg2922"
                    class="slip-slip-setoran-perorangan-q-codesvg"
                  />
                  <span class="slip-slip-setoran-perorangan-text08">
                    <span class="slip-slip-setoran-perorangan-text09">No.</span>
                    <span>Referensi</span>
                  </span>
                  <span class="slip-slip-setoran-perorangan-text11">
                    <span>01-000000001</span>
                  </span>
                </div>
              </div>
              <button class="slip-slip-setoran-perorangan-buttonbutton" onclick="tampilkanPopUp()">
                <span class="slip-slip-setoran-perorangan-text13 ButtonMedium-16">
                  <span>Cetak</span>
                </span>
              </button>            
            </div>
          </div>
        </div>
      </div>

    </div>
    <div id="popup" class="popup-container">
      <div class="popup-content">
        <!-- Isi pop-up di sini -->
        <img src="frontend\assets\centang.png" alt="">
        <h2>Struk Berhasil Dicetak</h2>
        <p>Halaman ini akan ditutup dalam <span id="countdown">5</span> detik.</p>
      </div>
    </div>

    <script>
      function tampilkanPopUp() {
        var popup = document.getElementById("popup");
        popup.classList.add("active");

        // Mengatur waktu countdown sebelum menutup pop-up
        var waktu = 5;
        var countdownElement = document.getElementById("countdown");
        countdownElement.textContent = waktu;

        var countdownInterval = setInterval(function() {
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
    </script>
  </body>
</html>
