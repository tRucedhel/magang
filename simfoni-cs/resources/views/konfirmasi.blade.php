<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SLIP PIL</title>
  <link rel="stylesheet" href="frontend/styles/konfirmasi.css">
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

    <div class="slip-slip-setoran-perorangan-konfirmasi1-frame">
      <span class="slip-slip-setoran-perorangan-konfirmasi1-text04">
        <span>Konfirmasi</span>
      </span>
      <div class="slip-slip-setoran-perorangan-konfirmasi1-toaster">
        <span class="slip-slip-setoran-perorangan-konfirmasi1-text06">
          <span>
            Pastikan data yang telah dimasukkan sesuai dengan data Anda.
          </span>
        </span>
      </div>
      <div class="slip-slip-setoran-perorangan-konfirmasi1-content">
        <div class="slip-slip-setoran-perorangan-konfirmasi1-frame01">
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form01">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame02"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text08"
              >
                <span>Tanggal</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text10"
              >
                <span>22 Juni 2023</span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form02">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame03"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text12"
              >
                <span>Nama Pemilik Rekening</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text14"
              >
                <span id="outputNama"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form03">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame04"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text16"
              >
                <span>NIK Pemilik Rekening</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text18"
              >
                <span id="outputNIK"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form04">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame05"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text20"
              >
                <span>Jenis &amp; Nomor Rekening</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text22"
              >
                <span id="outputJenisRekening"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form05">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame06"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text24"
              >
                <span>Nama Penyetor</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text26"
              >
                <span id="outputNamaPenyetor"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form06">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame07"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text28"
              >
                <span>NIK Penyetor</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text30"
              >
                <span id="outputNIKPenyetor"></span>
              </span>
            </div>
          </div>
        </div>
        <div class="slip-slip-setoran-perorangan-konfirmasi1-frame08">
          <!-- <div class="slip-slip-setoran-perorangan-konfirmasi1-frame09">
            <span
              class="slip-slip-setoran-perorangan-konfirmasi1-text32"
            >
              <span>Penyetor bukan Pemilik Rekening</span>
            </span>
          </div> -->
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form07">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame10"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text34"
              >
                <span>Alamat Penyetor</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text36"
              >
                <span id="outputAlamatPenyetor"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form08">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame11"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text38"
              >
                <span>Nomor HP Penyetor</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text40"
              >
                <span id="outputNomorHPenyetor"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form09">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame12"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text42"
              >
                <span>Sumber Dana</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text44"
              >
                <span id="outputSumberDana"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form10">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame13"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text46"
              >
                <span>Tujuan Transaksi</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text48"
              >
                <span id="outputTujuanTransaksi"></span>
              </span>
            </div>
          </div>
          <div class="slip-slip-setoran-perorangan-konfirmasi1-form11">
            <div
              class="slip-slip-setoran-perorangan-konfirmasi1-frame14"
            >
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text50"
              >
                <span>Jumlah Setoran</span>
              </span>
              <span
                class="slip-slip-setoran-perorangan-konfirmasi1-text52"
              >
                <span id="outputJumlahSetoran"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="c_slip-frame13">
        <button class="c_slip-instance6" onclick="window.location.href='struk'">
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
                        <button class="button-back-konfirmasi" onclick="window.location.href='slip3'">
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

<script>
  // Ambil data dari URL parameter
  const urlParams = new URLSearchParams(window.location.search);
  const namaPemilikRekening = urlParams.get('nama');
  const jenisNomorRekening = urlParams.get('jenis_rekening');
  const sumberDana = urlParams.get('sumber_dana');
  const tujuanTransaksi = urlParams.get('tujuan_transaksi');
  const jumlahSetoran = urlParams.get('jumlah_setoran');
  const isPenyetorPemilikRekening = urlParams.get('is_penyetor_pemilik_rekening') === 'true';
  const namaPenyetor = urlParams.get('nama_penyetor');
  const nikPenyetor = urlParams.get('nik_penyetor');
  const alamatPenyetor = urlParams.get('alamat_penyetor');
  const nomorHPenyetor = urlParams.get('nomor_hp_penyetor');
  const NIKPemilikRekening = urlParams.get('nik_pemilik_rekening');


  // Tampilkan data pada halaman
  document.getElementById('outputNama').innerText = namaPemilikRekening;
  document.getElementById('outputNIK').innerText = NIKPemilikRekening;
  document.getElementById('outputJenisRekening').innerText = jenisNomorRekening;
  document.getElementById('outputSumberDana').innerText = sumberDana;
  document.getElementById('outputTujuanTransaksi').innerText = tujuanTransaksi;
  document.getElementById('outputJumlahSetoran').innerText = jumlahSetoran;
  document.getElementById('outputPenyetorPemilikRekening').innerText = isPenyetorPemilikRekening ? 'Ya' : 'Tidak';

  // Tampilkan info penyetor jika diperlukan
  if (!isPenyetorPemilikRekening) {
    document.getElementById('penyetorInfo').style.display = 'block';
    document.getElementById('outputNamaPenyetor').innerText = namaPenyetor;
    document.getElementById('outputNIKPenyetor').innerText = nikPenyetor;
    document.getElementById('outputAlamatPenyetor').innerText = alamatPenyetor;
    document.getElementById('outputNomorHPenyetor').innerText = nomorHPenyetor;
  } else {
    document.getElementById('penyetorInfo').style.display = 'none';
  }
</script>
<!-- <script src="frontend/script/konfirmasi.js"></script> -->
<script src="/frontend/script/popup.js"></script>
</body>

</html>