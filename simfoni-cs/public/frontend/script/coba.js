const inputs = document.querySelectorAll('input[required]');
const lanjutkanButton = document.querySelector('.c_slip-instance6');
const hideElementsOnCheckboxChecked = document.querySelectorAll('.hide-on-checkbox-checked');
const checkbox = document.getElementById('penyetorPemilikRek');

// Fungsi untuk memeriksa apakah semua input yang wajib diisi sudah terisi
function areAllVisibleInputsFilled() {
  return Array.from(inputs).every(input => input.offsetParent !== null && input.value.trim() !== '');
}

function areAllInputsFilledByClass() {
const inputs = document.querySelectorAll('.' + 'wajib');
return Array.from(inputs).every(input => input.offsetParent !== null && input.value.trim() !== '');
}

// Fungsi untuk mengatur status tombol "Lanjutkan" berdasarkan input yang terisi dan status checkbox
function updateButtonState() {
  const isCheckboxChecked = checkbox.checked;

  if ((isCheckboxChecked && areAllInputsFilledByClass())|| areAllVisibleInputsFilled()) {
    lanjutkanButton.disabled = false;
    lanjutkanButton.classList.add('red-button');
  } else {
    lanjutkanButton.disabled = true;
    lanjutkanButton.classList.remove('red-button');
  }
}

// Panggil fungsi di atas saat halaman dimuat
window.addEventListener('load', updateButtonState);

// Tambahkan event listener untuk setiap input yang wajib diisi
inputs.forEach(input => {
  input.addEventListener('input', updateButtonState);
});

// Fungsi untuk mengatur tampilan elemen-elemen di bawah checkbox berdasarkan status checkbox
function updateElementsVisibility() {
  const hideElements = checkbox.checked;
  hideElementsOnCheckboxChecked.forEach(element => {
    element.style.display = hideElements ? 'none' : 'block';
  });

  // Panggil fungsi updateButtonState() saat status elemen berubah
  updateButtonState();
}
// Panggil fungsi di atas saat halaman dimuat dan ketika checkbox berubah statusnya
window.addEventListener('load', updateElementsVisibility);
checkbox.addEventListener('change', updateElementsVisibility);

function pindah() {
  // Ambil data dari inputan
  const namaPemilikRekening = document.querySelector('.c_perorangan-text09').innerText;
  const NIKPemilikRekening = document.querySelector('.c_perorangan-text25').innerText;
  const jenisNomorRekening = document.getElementById('jenis-nomor-rekening').value;
  const sumberDana = document.getElementById('inputSumberDana').value;
  const tujuanTransaksi = document.getElementById('inputTujuanTransaksi').value;
  const jumlahSetoran = document.getElementById('inputJumlahSetoran').value;
  const isPenyetorPemilikRekening = document.getElementById('penyetorPemilikRek').checked;
  const namaPenyetor = document.getElementById('inputNamaPenyetor').value;
  const nikPenyetor = document.getElementById('inputNIKPenyetor').value;
  const alamatPenyetor = document.getElementById('inputAlamatPenyetor').value;
  const nomorHPenyetor = document.getElementById('inputNomorHPenyetor').value;

  // Redirect ke halaman "kaja.html" dengan mengirimkan data input sebagai URL parameter
  window.location.href = `1-cobangambil.html?nama=${encodeURIComponent(namaPemilikRekening)}&jenis_rekening=${encodeURIComponent(jenisNomorRekening)}&sumber_dana=${encodeURIComponent(sumberDana)}&tujuan_transaksi=${encodeURIComponent(tujuanTransaksi)}&jumlah_setoran=${encodeURIComponent(jumlahSetoran)}&is_penyetor_pemilik_rekening=${isPenyetorPemilikRekening}&nama_penyetor=${encodeURIComponent(namaPenyetor)}&nik_penyetor=${encodeURIComponent(nikPenyetor)}&alamat_penyetor=${encodeURIComponent(alamatPenyetor)}&nomor_hp_penyetor=${encodeURIComponent(nomorHPenyetor)}&nik_pemilik_rekening=${encodeURIComponent(NIKPemilikRekening)}`;
}