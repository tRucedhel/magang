<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SLIP PIL</title>
  <link rel="stylesheet" href="frontend/styles/2-slip.css">
  <link rel="stylesheet" href="frontend/styles/popup.css">
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
    <button class="c_slip-instance" onclick="tampilkanPopUp()">
      <div class="c_slip-frame04">
        <img src="./frontend/assets/iconBack.svg" alt="instance" width="24" height="24"
          class="c_slip-instance1" />
        <div class="c_slip-text02">
          <p class="c_slip-text03">Kembali</p>
        </div>
      </div>
    </button>

    <div class="c_slip-frame05">
      <div class="c_slip-text04">
        <p class="c_slip-text05">Slip</p>
      </div>
      <div class="c_slip-frame06">
        <div class="c_slip-frame07">
          <div class="c_slip-frame08">
            <div class="c_slip-text06">
              <label class="c_slip-text07" for="slip-setoran">Slip Setoran</label>
            </div>
            <input type="radio" name="slip" id="slip-setoran" class="radio-button" style="width: 30px; height: 30px;" />
          </div>
          <div class="c_slip-frame09">
            <div class="c_slip-text08">
              <label class="c_slip-text09" for="slip-tarik">Slip Tarik</label>
            </div>
            <input type="radio" name="slip" id="slip-tarik" class="radio-button" style="width: 30px; height: 30px;" />
          </div>
        </div>
        <div class="c_slip-frame10">
          <div class="c_slip-frame11">
            <div class="c_slip-text10">
              <label class="c_slip-text11" for="slip-permohonan-transfer">Slip Permohonan Transfer</label>
            </div>
            <input type="radio" name="slip" id="slip-permohonan-transfer" class="radio-button"
              style="width: 30px; height: 30px;" />
          </div>
          <div class="c_slip-frame12">
            <div class="c_slip-text12">
              <label class="c_slip-text13" for="slip-penutupan-tabungan">Slip Penutupan Tabungan</label>
            </div>
            <input type="radio" name="slip" id="slip-penutupan-tabungan" class="radio-button"
              style="width: 30px; height: 30px;" />
          </div>
        </div>
      </div>
      <div class="c_slip-frame13">
        <button class="c_slip-instance6" onclick="window.location.href='slip3-np'">
          <div class="c_slip-text14">
            <p class="c_slip-text15">Lanjutkan</p>
          </div>
        </button>
      </div>
    </div>
  </div>

  <!-- Ini Popup button back -->
  <div id="popup" class="popup-container">
    <div class="popup-content">
        <div class="inside-popup-content">
            <h3>Apakah Anda Yakin untuk Kembali?</h3>
            <p>Jika Anda yakin untuk kembali. Data yang <br> Anda isi akan hilang.</p>
            <div>
                <div class="frame-button-popup">
                    <div class="frame-button-ya">
                        <button class="button-back-konfirmasi" onclick="window.location.href='slip1'">
                            <div class="text-button-back">
                                <p>Ya</p>
                            </div>
                        </button>
                    </div>
                    <div class="frame-button-tidak">
                        <button class="button-back-konfirmasi">
                            <div class="text-button-back">
                                <p>Tidak</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/frontend/script/2-slip.js"></script>
<script src="/frontend/script/popup.js"></script>
  
</body>

</html>