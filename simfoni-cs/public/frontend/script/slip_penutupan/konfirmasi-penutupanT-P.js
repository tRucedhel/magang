// Ambil data dari URL parameter
const urlParams = new URLSearchParams(window.location.search);
const namaPemilikRekening = urlParams.get('nama');
const jenisNomorRekening = urlParams.get('jenis_rekening');
const NIKPemilikRekening = urlParams.get('nik_pemilik_rekening');

// Tampilkan data pada halaman
document.getElementById('outputNama').innerText = namaPemilikRekening;
document.getElementById('outputNIK').innerText = NIKPemilikRekening;
document.getElementById('outputJenisRekening').innerText = jenisNomorRekening;


function kembali() {
    // Kembali ke halaman sebelumnya
    window.history.back();
}  