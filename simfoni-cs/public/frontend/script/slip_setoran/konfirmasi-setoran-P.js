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
const FotoKTPPenyetor = urlParams.get('foto_ktp_penyetor');

// Tampilkan data pada halaman
document.getElementById('outputNama').innerText = namaPemilikRekening;
document.getElementById('outputNIK').innerText = NIKPemilikRekening;
document.getElementById('outputJenisRekening').innerText = jenisNomorRekening;
document.getElementById('outputSumberDana').innerText = sumberDana;
document.getElementById('outputTujuanTransaksi').innerText = tujuanTransaksi;
document.getElementById('outputJumlahSetoran').innerText = jumlahSetoran;
document.getElementById('outputNamaPenyetor').innerText = namaPenyetor;
document.getElementById('outputNIKPenyetor').innerText = nikPenyetor;
document.getElementById('outputAlamatPenyetor').innerText = alamatPenyetor;
document.getElementById('outputNomorHPenyetor').innerText = nomorHPenyetor;
document.getElementById('outputFotoKTPPenyetor').innerText = FotoKTPPenyetor;
// document.getElementById('outputPenyetorPemilikRekening').innerText = isPenyetorPemilikRekening ? 'Ya' : 'Tidak';

console.log("isPenyetorPemilikRekening:", isPenyetorPemilikRekening);
// Tampilkan info penyetor jika diperlukan
const cekNamaPenyetor = document.getElementById('cekNamaPenyetor');
const cekNIKPenyetor = document.getElementById('cekNIKPenyetor');
const cekAlamatPenyetor = document.getElementById('cekAlamatPenyetor');
const cekNoHPPenyetor = document.getElementById('cekNoHPPenyetor');

if (isPenyetorPemilikRekening == true) {
    cekNamaPenyetor.style.display = 'none';
    cekNIKPenyetor.style.display = 'none';
    cekAlamatPenyetor.style.display = 'none';
    cekNoHPPenyetor.style.display = 'none';
} else {
    cekNamaPenyetor.style.display = 'block';
    cekNIKPenyetor.style.display = 'block';
    cekAlamatPenyetor.style.display = 'block';
    cekNoHPPenyetor.style.display = 'block';
}

function kembali() {
    // Kembali ke halaman sebelumnya
    window.history.back();
}  