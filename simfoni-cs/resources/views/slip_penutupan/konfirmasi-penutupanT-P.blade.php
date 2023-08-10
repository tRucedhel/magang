<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Perorangan</title>
  <link rel="stylesheet" href="frontend/styles/slip_penutupan/konfirmasi-penutupanT-P.css">
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
        <img src="./frontend/assets/iconBack.svg" alt="instance" width="24" height="24" class="c_slip-instance1" />
        <div class="c_slip-text02">
          <p class="c_slip-text03">Kembali</p>
        </div>
      </div>
    </button>

    <div class="konfirmasi1-frame">
      <span class="konfirmasi1-text04">
        <span>Konfirmasi</span>
      </span>
      <div class="konfirmasi1-toaster">
        <span class="konfirmasi1-text06">
          <span>
            Pastikan data yang telah dimasukkan sesuai dengan data Anda.
          </span>
        </span>
      </div>
      <div class="konfirmasi1-content">
        <div class="konfirmasi1-frame01">
          <div class="konfirmasi1-form01">
            <div class="konfirmasi1-frame02">
              <span class="konfirmasi1-text08">
                <span>Tanggal</span>
              </span>
              <span class="konfirmasi1-text10">
                <span>22 Juni 2023</span>
              </span>
            </div>
          </div>
          <div class="konfirmasi1-form02">
            <div class="konfirmasi1-frame03">
              <span class="konfirmasi1-text12">
                <span>Nama Pemilik Rekening</span>
              </span>
              <span class="konfirmasi1-text14">
                <span id="outputNama"></span>
              </span>
            </div>
          </div>
          <div class="konfirmasi1-form03">
            <div class="konfirmasi1-frame04">
              <span class="konfirmasi1-text16">
                <span>NIK Pemilik Rekening</span>
              </span>
              <span class="konfirmasi1-text18">
                <span id="outputNIK"></span>
              </span>
            </div>
          </div>
          <div class="konfirmasi1-form04">
            <div class="konfirmasi1-frame05">
              <span class="konfirmasi1-text20">
                <span>Jenis &amp; Nomor Rekening</span>
              </span>
              <span class="konfirmasi1-text22">
                <span id="outputJenisRekening"></span>
              </span>
            </div>
          </div>
        </div>
        <div class="konfirmasi1-frame08">
          <div class="konfirmasi1-form09">
            <div class="konfirmasi1-frame12">
              <span class="konfirmasi1-text42">
                <span>Saldo Tabungan Sebelum Admin</span>
              </span>
              <span class="konfirmasi1-text44">
                <span>5.050.000</span>
              </span>
            </div>
          </div>
          <div class="konfirmasi1-form10">
            <div class="konfirmasi1-frame13">
              <span class="konfirmasi1-text46">
                <span>Biaya Penutupan</span>
              </span>
              <span class="konfirmasi1-text48">
                <span>50.000</span>
              </span>
            </div>
          </div>
          <div class="konfirmasi1-form11">
            <div class="konfirmasi1-frame14">
              <span class="konfirmasi1-text50">
                <span>Saldo yang Diterima Nasabah</span>
              </span>
              <span class="konfirmasi1-text52">
                <span>5.000.000</span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="c_slip-frame13">
        <button class="c_slip-instance6" onclick="window.location.href='struk-penutupan-P'">
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
            <div class="text-jud">
                <p>Apakah Anda Yakin untuk Kembali?</p>
            </div>
            <div class="text-ket">
                <p>Jika Anda yakin untuk kembali. Data yang <br> Anda isi akan hilang.</p>
            </div>
            <div>
                <div class="frame-button-popup">
                    <div class="frame-button-ya">
                        <!-- <button class="button-back-konfirmasi-ya" onclick="window.location.href='slip-setoran-P.html'"> -->
                        <button class="button-back-konfirmasi-ya" onclick="kembali()">
                            <div class="text-button-back-ya">
                                <p>Ya</p>
                            </div>
                        </button>
                    </div>
                    <div class="frame-button-tidak">
                        <button class="button-back-konfirmasi-tidak">
                            <div class="text-button-back-tidak">
                                <p>Tidak</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <script src="frontend/script/slip_penutupan/konfirmasi-penutupanT-P.js"></script>
  <script src="/frontend/script/popup.js"></script>
</body>

</html>