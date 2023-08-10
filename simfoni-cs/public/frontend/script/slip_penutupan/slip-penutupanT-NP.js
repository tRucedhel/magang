const inputs = document.querySelectorAll('input[required]');
const lanjutkanButton = document.querySelector('.c_slip-instance6');
const hideElementsOnCheckboxChecked = document.querySelectorAll('.hide-on-checkbox-checked');
const checkbox = document.getElementById('penyetorPemilikRek');
const jenisNomorRekeningSelect = document.getElementById('jenis-nomor-rekening');

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
  const inputNIKPenutupTabungan = document.getElementById('inputNIKPenutupTabungan').value;

  if ((isCheckboxChecked && areAllInputsFilledByClass() && jenisNomorRekeningSelect.value !== '') 
    || (areAllVisibleInputsFilled() && inputNIKPenutupTabungan.length === 16 && jenisNomorRekeningSelect.value !== ''))  {
    lanjutkanButton.disabled = false;
    lanjutkanButton.style.backgroundColor = '#C02929';
    // lanjutkanButton.classList.add('red-button');
  } else {
    lanjutkanButton.disabled = true;
    lanjutkanButton.style.backgroundColor = '#E3E3E3';
    // lanjutkanButton.classList.remove('red-button');
  }
}

jenisNomorRekeningSelect.addEventListener('change', updateButtonState);

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

function limitInputNIK() {
  const inputNIKPenutupTabungan = document.getElementById("inputNIKPenutupTabungan");
  const inputValue = inputNIKPenutupTabungan.value;

  if (inputValue.length >= 16) {
    inputNIKPenutupTabungan.value = inputValue.substring(0, 16); // Truncate to 16 digits
  } 
}

function pindahHalaman() {
  // Ambil data dari inputan
  const namaPemilikRekening = document.querySelector('.c_perorangan-text09').innerText;
  const namaPendiri = document.querySelector('.c_perorangan-text10').innerText;
  const NPWPBadan= document.querySelector('.c_perorangan-text11').innerText;
  const NIKPendiri= document.querySelector('.c_perorangan-text12').innerText;
  const jenisNomorRekening = document.getElementById('jenis-nomor-rekening').value;
  const alasanPR = document.getElementById('inputAlasanPR').value;
  const isPenyetorPemilikRekening = document.getElementById('penyetorPemilikRek').checked;
  const namaPenutupTabungan = document.getElementById('inputNamaPenutupTabungan').value;
  const nikPenutupTabungan = document.getElementById('inputNIKPenutupTabungan').value;
  const alamatPenutupTabungan = document.getElementById('inputAlamatPenutupTabungan').value;
  const nomorHPPenutupTabungan = document.getElementById('inputNomorHPPenutupTabungan').value;

  // Redirect ke halaman "konfirmasi.html" dengan mengirimkan data input sebagai URL parameter
  window.location.href = `konfirmasi-penutupan-NP?nama=${encodeURIComponent(namaPemilikRekening)}&nama_pendiri=${encodeURIComponent(namaPendiri)}&npwp_badan=${encodeURIComponent(NPWPBadan)}&jenis_rekening=${encodeURIComponent(jenisNomorRekening)}&alasan_pr=${encodeURIComponent(alasanPR)}&is_penyetor_pemilik_rekening=${isPenyetorPemilikRekening}&nama_penutup_tabungan=${encodeURIComponent(namaPenutupTabungan)}&nik__penutup_tabungan=${encodeURIComponent(nikPenutupTabungan)}&alamat__penutup_tabungan=${encodeURIComponent(alamatPenutupTabungan)}&nomor_hp__penutup_tabungan=${encodeURIComponent(nomorHPPenutupTabungan)}&nik_pendiri=${encodeURIComponent(NIKPendiri)}`;
}

function kapitalizeFirstLetter(input) {
    // Konversi huruf awal menjadi kapital
    input.value = input.value.charAt(0).toUpperCase() + input.value.slice(1);
  }

function capitalizeFirstLetter(input) {
    // Konversi huruf awal setiap kata menjadi kapital
    input.value = input.value.replace(/(?:^|\s)\S/g, function (a) { return a.toUpperCase(); });
}

function updateInput() {
  let inputElement = document.getElementById("inputJumlahSetoran");
  let inputValue = inputElement.value.replace(/\D/g, ''); // Menghapus karakter non-digit

  if (inputValue === "") {
      inputElement.value = ""; // Mengosongkan input jika tidak ada angka
      return;
  }

  inputValue = parseInt(inputValue);

  inputValue = inputValue.toLocaleString('id-ID'); // Menambahkan titik sebagai pemisah ribuan
  inputElement.value = inputValue;
}
  
  document.getElementById("inputJumlahSetoran").addEventListener("keypress", function(e) {
    if (isNaN(String.fromCharCode(e.keyCode)) && e.keyCode !== 8 && e.keyCode !== 46 && e.keyCode !== 46) {
      e.preventDefault(); // Prevent entering non-numeric characters
    }
  });