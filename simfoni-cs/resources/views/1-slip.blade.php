<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIP</title>
    <link rel="stylesheet" href="frontend/styles/1-slip.css">
    <link rel="stylesheet" href="frontend/styles/popup.css">
    <!-- <script src="frontend/script/slip.js"></script> -->
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
        <button class="c_slip-instance"  onclick="tampilkanPopUp()">
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
                <button class="c_slip-frame07" onclick="showCekDataNasabah('perorangan')" id="tombolPerorangan">
                    <img src="./frontend/assets/iconP.svg" alt="instance" width="24" height="24"
                        class="c_slip-instance2" />
                    <div class="c_slip-text06">
                        <p class="c_slip-text07">Perorangan</p>
                    </div>
                </button>
                <button class="c_slip-frame08" onclick="showCekDataNasabah('non_perorangan')" id="tombolNonPerorangan">
                    <img src="./frontend/assets/iconNP.svg" alt="instance" width="24" height="24"
                        class="c_slip-instance3" />
                    <div class="c_slip-text08">
                        <p class="c_slip-text09">Non - Perorangan</p>
                    </div>
                </button>
            </div>

            <!-- Perorangan -->
            <div class="c_slip-frame09" id="cekDataNasabahPerorangan" style="display: none;">
                <div class="c_slip-frame10">
                    <div class="c_slip-text10">
                        <p class="c_slip-text11">Cek Data Nasabah</p>
                    </div>
                    <div class="c_slip-frame11">
                        <div class="input-instance">
                            <div class="input-frame">
                                <div class="input-text1">
                                    <div class="input-container input-text2">
                                        <input type="number" id="inputNIK" name="inputNIK" required placeholder=" " oninput="limitInputNIK()">
                                        <label class="input-text3" for="inputNIK">NIK Pemilik Rekening</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-instance">
                            <div class="input-frame">
                                <div class="input-text1">
                                    <div class="input-container input-text2">
                                        <input type="date" id="inputTanggalLahir" name="inputTanggalLahir" required placeholder=" ">
                                        <label class="input-text3" for="inputTanggalLahir">Tanggal Lahir</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Non-Perorangan -->
            <div class="c_slip-no-frame09" id="cekDataNasabahNonPerorangan" style="display: none;">
                <div class="c_slip-no-frame10">
                    <div class="c_slip-no-text10">
                        <p class="c_slip-no-text11">Cek Data Nasabah</p>
                    </div>
                    <div class="c_slip-no-frame11">
                        <div class="input-instance">
                            <div class="input-frame">
                                <div class="input-text1">
                                    <div class="input-container-NP input-text2">
                                        <input type="text" id="inputNPWP" name="inputNPWP" required placeholder=" ">
                                        <label class="input-text3" for="inputNPWP">NPWP Badan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-instance">
                            <div class="input-frame">
                                <div class="input-text1">
                                    <div class="input-container-NP input-text2">
                                        <input type="number" id="inputNIKPendiri" name="inputNIKPendiri" required placeholder=" " oninput="limitInputNIK()">
                                        <label class="input-text3" for="inputNIKPendiri">NIK Pendiri</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-instance">
                            <div class="input-frame">
                                <div class="input-text1">
                                    <div class="input-container-NP input-text2">
                                        <input type="date" id="inputTanggalPendirian" name="inputTanggalPendirian" required placeholder=" ">
                                        <label class="input-text3" for="inputTanggalPendirian">Tanggal Pendirian</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c_slip-frame13">
                <button id="lanjutkanButton" style="display: none;" class="c_slip-instance6" onclick="lanjutkan()">
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
                            <button class="button-back-konfirmasi" onclick="window.location.href='/'">
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
    
    <script src="/frontend/script/1-slip.js"></script>
    <script src="/frontend/script/popup.js"></script>
</body>

</html>