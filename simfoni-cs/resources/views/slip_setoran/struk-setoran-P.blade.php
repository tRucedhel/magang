<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <title>Struk</title>

  <link rel="stylesheet" href="frontend/styles/style-struk.css">
  <link rel="stylesheet" href="frontend/styles/struk.css">
  
</head>

<body>
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
    <div class="struk-container">
      <div class="struk-form">
        <div class="struk-frame">
          <span class="struk-text">
            <span>Struk Digital</span>
          </span>
          <div class="struk-content">
            <div class="struk-card">
              <div class="struk-error-form">
                <span class="struk-text02">
                  <span>001</span>
                </span>
              </div>
              <span class="struk-text04 ButtonMedium-16">
                <span>No. Antrian</span>
              </span>
              <span class="struk-text06">
                <span>22 Juni 2023 | 08:27:00</span>
              </span>
              <img src="frontend\assets\QRcode.svg" alt="QRCodesvg2922"
                class="struk-q-codesvg" />
              <span class="struk-text08">
                <span class="struk-text09">No.</span>
                <span>Referensi</span>
              </span>
              <span class="struk-text11">
                <span>01-000000001</span>
              </span>
            </div>
          </div>
          <button class="struk-buttonbutton" onclick="tampilkanPopUp()">
            <span class="struk-text13 ButtonMedium-16">
              <span>Cetak</span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>

  <div id="popup" class="popup-container">
    <div class="popup-content">
      <!-- Isi pop-up di sini -->
      <img src="frontend\assets\centang.png" alt="">
      <h2>Struk Berhasil Dicetak</h2>
      <p>Halaman ini akan ditutup dalam <span id="countdown">5</span> detik.</p>
    </div>
  </div>

  <script src="frontend/script/struk.js"></script>
</body>

</html>