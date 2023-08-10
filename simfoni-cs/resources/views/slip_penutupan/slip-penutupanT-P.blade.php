<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Penutupan Tabungan Perorangan</title>
    <link rel="stylesheet" href="frontend/styles/slip_penutupan/slip-penutupanT-P.css">
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
                <p class="c_slip-text05">Slip Penutupan Tabungan Perorangan</p>
            </div>
            <div class="c_perorangan-frame06">
                <div class="c_perorangan-frame07">
                    <div class="c_perorangan-instance02">
                        <div class="c_perorangan-frame08">
                            <div class="c_perorangan-text06">
                                <p class="c_perorangan-text07">Nama Pemilik Rekening</p>
                            </div>
                            <!-- ngambil dari database -->
                            <div class="c_perorangan-text08">
                                <p class="c_perorangan-text09">Fauzi Sofyan</p>
                            </div>
                        </div>
                    </div>

                    <div class="c_perorangan-instance08">
                        <div class="c_perorangan-frame15">
                            <div class="c_perorangan-text22">
                                <p class="c_perorangan-text23">NIK Pemilik Rekening</p>
                            </div>
                            <div class="c_perorangan-text24">
                                <p class="c_perorangan-text25">32112312313131231</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="c_perorangan-frame14">
                    <div class="dropdown-instance">
                        <div class="dropdown-frame">
                            <div class="dropdown-frame1">
                                <div class="dropdown-text1">
                                    <div class="dropdown-box">
                                        <select id="jenis-nomor-rekening" name="jenis_nomor_rekening" 
                                            class="dropdown-text2" required>
                                            <option value= "" disabled selected>Pilih Jenis & Nomor Rekening *</option>
                                            <option value="jenis1">Jenis 1</option>
                                            <option value="jenis2">Jenis 2</option>
                                            <option value="jenis3">Jenis 3</option>
                                        </select>
                                    </div>
                                </div>
                                <img src="./frontend/assets/673906cb0d6305eb58cf5b58d9489ab9.svg" alt="instance"
                                    width="24" height="24" class="dropdown-instance1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c_slip-frame13">
                <button class="c_slip-instance6" onclick="pindahHalaman()" disabled>
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
                            <button class="button-back-konfirmasi-ya" onclick="window.location.href='slip-p'">
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
    <script src="/frontend/script/slip_penutupan/slip-penutupanT-P.js"></script>
    <script src="/frontend/script/popup.js"></script>
</body>

</html>