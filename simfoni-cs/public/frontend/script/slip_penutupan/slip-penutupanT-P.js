// Get the necessary elements
const jenisNomorRekeningSelect = document.getElementById('jenis-nomor-rekening');
// const btnLanjutkan = document.getElementById('btnLanjutkan');
const lanjutkanButton = document.querySelector('.c_slip-instance6');

lanjutkanButton.style.backgroundColor = '#E3E3E3';
// Function to handle the dropdown change event
function checkDropdownSelection() {
// console.log("isPenyetorPemilikRekening:", jenisNomorRekeningSelect.value);

//   if ((jenisNomorRekeningSelect.value == '') || (jenisNomorRekeningSelect.value !== 'disabled')) {
  if (jenisNomorRekeningSelect.value == ''){
    lanjutkanButton.disabled = true;
    lanjutkanButton.style.backgroundColor = '#E3E3E3'; // Reset to default color
  } else {
    lanjutkanButton.disabled = false;
    lanjutkanButton.style.backgroundColor = '#c02929';
  }
}

// Add event listener to the dropdown select element
jenisNomorRekeningSelect.addEventListener('change', checkDropdownSelection);

function pindahHalaman() {
    // Ambil data dari inputan
    const namaPemilikRekening = document.querySelector('.c_perorangan-text09').innerText;
    const NIKPemilikRekening = document.querySelector('.c_perorangan-text25').innerText;
    const jenisNomorRekening = document.getElementById('jenis-nomor-rekening').value;

    // Redirect ke halaman "konfirmasi.html" dengan mengirimkan data input sebagai URL parameter
    window.location.href = `konfirmasi-penutupan-P?nama=${encodeURIComponent(namaPemilikRekening)}&jenis_rekening=${encodeURIComponent(jenisNomorRekening)}&nik_pemilik_rekening=${encodeURIComponent(NIKPemilikRekening)}`;
  }