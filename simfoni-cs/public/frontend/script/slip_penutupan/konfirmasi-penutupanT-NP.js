// Ambil data dari URL parameter
const urlParams = new URLSearchParams(window.location.search);
const namaPemilikRekening = urlParams.get('nama');
const NIKPendiri = urlParams.get('nik_pendiri');
const NPWPBadan = urlParams.get('npwp_badan');
const namaPendiri = urlParams.get('nama_pendiri');
const jenisNomorRekening = urlParams.get('jenis_rekening');
const alasanPR = urlParams.get('alasan_pr');
const isPenyetorPemilikRekening = urlParams.get('is_penyetor_pemilik_rekening') === 'true';
const namaPenutupTabungan = urlParams.get('nama_penutup_tabungan');
const nikPenutupTabungan = urlParams.get('nik__penutup_tabungan');
const alamatPenutupTabungan = urlParams.get('alamat__penutup_tabungan');
const nomorHPPenutupTabungan = urlParams.get('nomor_hp__penutup_tabungan');

// Tampilkan data pada halaman
document.getElementById('outputNama').innerText = namaPemilikRekening;
document.getElementById('outputNIK').innerText = NIKPendiri;
document.getElementById('outputNamaPendiri').innerText = namaPendiri;
document.getElementById('outputNPWPBadan').innerText = NPWPBadan;
document.getElementById('outputJenisRekening').innerText = jenisNomorRekening;
document.getElementById('outputalasanPR').innerText = alasanPR;
document.getElementById('outputJenisRekening1').innerText = jenisNomorRekening;
document.getElementById('outputalasanPR1').innerText = alasanPR;
document.getElementById('outputNamaPenutupTabungan').innerText = namaPenutupTabungan;
document.getElementById('outputNIKPenutupTabungan').innerText = nikPenutupTabungan;
document.getElementById('outputAlamatPenutupTabungan').innerText = alamatPenutupTabungan;
document.getElementById('outputNomorHPPenutupTabungan').innerText = nomorHPPenutupTabungan;
// document.getElementById('outputPenyetorPemilikRekening').innerText = isPenyetorPemilikRekening ? 'Ya' : 'Tidak';

console.log("isPenyetorPemilikRekening:", isPenyetorPemilikRekening);

// Tampilkan info penyetor jika diperlukan
const cekNamaPenutupTabungan = document.getElementById('cekNamaPenutupTabungan');
const cekNIKPenutupTabungan = document.getElementById('cekNIKPenutupTabungan');
const cekAlamatPenutupTabungan = document.getElementById('cekAlamatPenutupTabungan');
const cekNoHPPenutupTabungan = document.getElementById('cekNoHPPenutupTabungan');
const cekNorek = document.getElementById('cekNorek');
const cekAlasanPT = document.getElementById('cekAlasanPT');
const cekNorek1 = document.getElementById('cekNorek1');
const cekAlasanPT1 = document.getElementById('cekAlasanPT1');

if (isPenyetorPemilikRekening == true) {
    cekNamaPenutupTabungan.style.display = 'none';
    cekNIKPenutupTabungan.style.display = 'none';
    cekAlamatPenutupTabungan.style.display = 'none';
    cekNoHPPenutupTabungan.style.display = 'none';
    cekNorek.style.display = 'none';
    cekAlasanPT.style.display = 'none';
    cekNorek1.style.display = 'block';
    cekAlasanPT1.style.display = 'block';
} else {
    cekNamaPenutupTabungan.style.display = 'block';
    cekNIKPenutupTabungan.style.display = 'block';
    cekAlamatPenutupTabungan.style.display = 'block';
    cekNoHPPenutupTabungan.style.display = 'block';
    cekNorek.style.display = 'block';
    cekAlasanPT.style.display = 'block';
    cekNorek1.style.display = 'none';
    cekAlasanPT1.style.display = 'none';
}

function kembali() {
    // Kembali ke halaman sebelumnya
    window.history.back();
}  