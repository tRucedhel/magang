<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Setoran Non-Perorangan</title>
    <link rel="stylesheet" href="frontend/styles/slip_setoran/slip-setoran-NP.css">
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
                <p class="c_slip-text05">Slip Setoran Non-Perorangan</p>
            </div>
            <div class="c_perorangan-frame06">
                <div class="c_perorangan-frame07">
                    <div class="c_perorangan-instance02">
                        <div class="c_perorangan-frame08">
                            <div class="c_perorangan-text06">
                                <p class="c_perorangan-text07">Nama Pemilik Rekening</p>
                            </div>
                            <div class="c_perorangan-text08">
                                <p class="c_perorangan-text09">PT. Multipilar Balantika</p>
                            </div>
                        </div>
                    </div>

                    <div class="c_perorangan-instance02">
                        <div class="c_perorangan-frame08">
                            <div class="c_perorangan-text06">
                                <p class="c_perorangan-text07">Nama Pendiri</p>
                            </div>
                            <div class="c_perorangan-text08">
                                <p class="c_perorangan-text10">Rizky Destian</p>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-instance">
                        <div class="dropdown-frame">
                            <div class="dropdown-frame1">
                                <div class="dropdown-text1">
                                    <div class="dropdown-box">
                                        <select id="jenis-nomor-rekening" name="jenis_nomor_rekening"
                                            class="dropdown-text2" required>
                                            <option value="" disabled selected>Pilih Jenis & Nomor Rekening *</option>
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

                    <div class="input-instance">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="text" id="inputSumberDana" name="inputSumberDana" required
                                        placeholder=" " class="wajib" oninput="capitalizeFirstLetter(this)">
                                    <label class="input-text3" for="inputSumberDana">Sumber Dana</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-instance">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="text" id="inputTujuanTransaksi" name="inputTujuanTransaksi" required
                                        placeholder=" " class="wajib" oninput="capitalizeFirstLetter(this)">
                                    <label class="input-text3" for="inputTujuanTransaksi">Tujuan Transaksi</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-instance">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="text" id="inputJumlahSetoran" name="inputJumlahSetoran" required oninput="updateInput()"
                                        placeholder=" " class="wajib">
                                    <label class="input-text3" for="inputJumlahSetoran">Jumlah Setoran</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c_perorangan-frame14">
                    <div class="c_perorangan-instance02">
                        <div class="c_perorangan-frame08">
                            <div class="c_perorangan-text06">
                                <p class="c_perorangan-text07">NPWP Badan</p>
                            </div>
                            <div class="c_perorangan-text08">
                                <p class="c_perorangan-text11">01.234.567.8-123.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="c_perorangan-instance02">
                        <div class="c_perorangan-frame08">
                            <div class="c_perorangan-text06">
                                <p class="c_perorangan-text07">NIK Pendiri</p>
                            </div>
                            <div class="c_perorangan-text08">
                                <p class="c_perorangan-text12">32112312313102913</p>
                            </div>
                        </div>
                    </div>

                    <div class="c_perorangan-frame16">
                        <div class="c_perorangan-text26">
                            <label class="c_perorangan-text27" for="penyetorPemilikRek">Penyetor adalah Pemilik
                                Rekening</label>
                        </div>
                        <input type="checkbox" name="penyetorPemilikRek" id="penyetorPemilikRek" class="checkbox"
                            style="width: 30px; height: 30px;" />
                    </div>

                    <div class="input-instance hide-on-checkbox-checked">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="text" id="inputNamaPenyetor" name="inputNamaPenyetor" required
                                        placeholder=" " oninput="capitalizeFirstLetter(this)">
                                    <label class="input-text3" for="inputNamaPenyetor">Nama Penyetor</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-instance hide-on-checkbox-checked">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="number" id="inputNIKPenyetor" name="inputNIKPenyetor" required
                                        placeholder=" " oninput="limitInputNIK()">
                                    <label class="input-text3" for="inputNIKPenyetor">NIK Penyetor</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-instance hide-on-checkbox-checked">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="text" id="inputAlamatPenyetor" name="inputAlamatPenyetor" required
                                        placeholder=" " oninput="capitalizeFirstLetter(this)">
                                    <label class="input-text3" for="inputAlamatPenyetor">Alamat Penyetor</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-instance hide-on-checkbox-checked">
                        <div class="input-frame">
                            <div class="input-text1">
                                <div class="input-container input-text2">
                                    <input type="number" id="inputNomorHPenyetor" name="inputNomorHPenyetor" required
                                        placeholder=" ">
                                    <label class="input-text3" for="inputNomorHPenyetor">Nomor HP Penyetor</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="KTP-frame1" id="cekFotoKTP" style="display: none;">
                        <div class="KTP-frame2">
                          <div class="c_form-frame17">
                            <div class="KTP-text1">
                              <p class="KTP-text2">
                                <span class="KTP-text3">Foto KTP Penyetor</span>
                              </p>
                            </div>
                            <div class="KTP-text4">
                              <p class="KTP-text5" id="filename">Silahkan Upload Foto</p>
                            </div>
                          </div>
                          <label for="file" class="select-image">
                            <img src="./frontend/assets/iconUpload.svg" alt="instance" width="24" height="24"
                              class="KTP-instance" />
                          </label>
                          <input type="file" id="file" accept="image/*" hidden onchange="updateFileName(this)">
                        </div>
                      </div>
                </div>
            </div>
            <div class="c_slip-frame13">
                <button class="c_slip-instance6" onclick="pindahHalaman()">
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
                            <button class="button-back-konfirmasi-ya" onclick="window.location.href='slip_np'">
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

    <script src="/frontend/script/slip_setoran/slip-setoran-NP.js"></script>
    <script src="/frontend/script/popup.js"></script>
</body>

</html>