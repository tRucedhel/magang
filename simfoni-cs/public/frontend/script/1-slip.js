function showCekDataNasabah(jenisNasabah) {
    // Get the buttons for "Perorangan" and "Non-Perorangan"
    const peroranganButton = document.querySelector('.c_slip-frame07');
    const nonPeroranganButton = document.querySelector('.c_slip-frame08');
    const peroranganText = document.querySelector('.c_slip-text07');
    const nonPeroranganText = document.querySelector('.c_slip-text09');
    const peroranganIcon = document.querySelector('.c_slip-instance2');
    const nonPeroranganIcon = document.querySelector('.c_slip-instance3');

    // Set button Perorangan and Non Perorangan
    const defaultButtonP_NP = '#757575'
    const selectedButtonP_NP = "#FFFFFF"
    const IconP = './frontend/assets/iconP.svg';
    const IconNP = './frontend/assets/iconNP.svg';
    const whiteIconP = './frontend/assets/iconP_white.svg';
    const whiteIconNP = './frontend/assets/iconNP_white.svg';
    // Set the default button colors
    const defaultButtonTextColor = 'black';
    const defaultButtonBackgroundColor = 'white';

    // Set the selected button colors
    const selectedButtonTextColor = 'white';
    const selectedButtonBackgroundColor = '#C02929';

    // Reset the button styles to default
    peroranganButton.style.backgroundColor = defaultButtonBackgroundColor;
    peroranganButton.style.color = defaultButtonTextColor;
    nonPeroranganButton.style.backgroundColor = defaultButtonBackgroundColor;
    nonPeroranganButton.style.color = defaultButtonTextColor;

    // Change the button styles based on the selected type
    if (jenisNasabah === 'perorangan') {
        peroranganButton.style.backgroundColor = selectedButtonBackgroundColor;
        peroranganButton.style.color = selectedButtonTextColor;
        nonPeroranganText.style.color = defaultButtonP_NP;
        peroranganText.style.color = selectedButtonP_NP;
        nonPeroranganIcon.src = IconNP;
        peroranganIcon.src = whiteIconP;

    } else if (jenisNasabah === 'non_perorangan') {
        nonPeroranganButton.style.backgroundColor = selectedButtonBackgroundColor;
        nonPeroranganButton.style.color = selectedButtonTextColor;
        peroranganText.style.color = defaultButtonP_NP;
        nonPeroranganText.style.color = selectedButtonP_NP;
        peroranganIcon.src = IconP;
        nonPeroranganIcon.src = whiteIconNP;

    }

    // Continue with the rest of your function (showing "Cek Data Nasabah" and the "Lanjutkan" button)
    const cekDataNasabahPerorangan = document.getElementById('cekDataNasabahPerorangan');
    const cekDataNasabahNonPerorangan = document.getElementById('cekDataNasabahNonPerorangan');
    const lanjutkanButton = document.getElementById('lanjutkanButton');

    if (jenisNasabah === 'perorangan') {
        cekDataNasabahPerorangan.style.display = 'block';
        cekDataNasabahNonPerorangan.style.display = 'none';
    } else if (jenisNasabah === 'non_perorangan') {
        cekDataNasabahPerorangan.style.display = 'none';
        cekDataNasabahNonPerorangan.style.display = 'block';
    }

    lanjutkanButton.style.display = 'block';

    // Additional actions based on the selected type
    if (jenisNasabah === 'perorangan') {
        // Actions for "Perorangan"
    } else if (jenisNasabah === 'non_perorangan') {
        // Actions for "Non-Perorangan"
    }

    peroranganButton.classList.remove('selected-button');
    nonPeroranganButton.classList.remove('selected-button');

    // Change the button styles based on the selected type
    if (jenisNasabah === 'perorangan') {
        peroranganButton.classList.add('selected-button');
    } else if (jenisNasabah === 'non_perorangan') {
        nonPeroranganButton.classList.add('selected-button');
    }
}

function lanjutkan() {
    const jenisNasabah = document.querySelector('.c_slip-frame07').style.backgroundColor === 'rgb(192, 41, 41)' ? 'perorangan' : 'non_perorangan';
    const baseUrl = jenisNasabah === 'perorangan' ? 'slip2' : 'slip2-np';

    if (jenisNasabah === 'perorangan') {
        const nik = document.getElementById('inputNIK').value;
        const tanggalLahir = document.getElementById('inputTanggalLahir').value;

        if (nik === "" || tanggalLahir === "") {
            alert("Mohon isi NIK Pemilik Rekening dan tanggal lahir!");
        } else {
            // Redirect ke halaman "jaya1.html" atau lakukan tindakan lain sesuai kebutuhan
            // window.location.href = 'jaya1.html';
            window.location.href = `${baseUrl}?nik=${encodeURIComponent(nik)}&tanggal_lahir=${encodeURIComponent(tanggalLahir)}`;
        }
    } else if (jenisNasabah === 'non_perorangan') {
        const npwp = document.getElementById('inputNPWP').value;
        const nikPendiri = document.getElementById('inputNIKPendiri').value;
        const tanggalPendirian = document.getElementById('inputTanggalPendirian').value;

        if (npwp === "" || nikPendiri === "" || tanggalPendirian === "") {
            alert("Mohon isi NPWP Badan, NIK Pendiri, dan Tanggal Pendirian!");
        } else {
            // Redirect ke halaman "jaya2.html" atau lakukan tindakan lain sesuai kebutuhan
            // window.location.href = 'jaya2.html';
            window.location.href = `${baseUrl}?npwp=${encodeURIComponent(npwp)}&nik_pendiri=${encodeURIComponent(nikPendiri)}&tanggal_pendirian=${encodeURIComponent(tanggalPendirian)}`;
        }
    }
}

function checkInputs() {
    const jenisNasabah = document.querySelector('.c_slip-frame07').style.backgroundColor === 'rgb(192, 41, 41)' ? 'perorangan' : 'non_perorangan';
    const lanjutkanButton = document.getElementById('lanjutkanButton');

    if (jenisNasabah === 'perorangan') {
        const nik = document.getElementById('inputNIK').value;
        const tanggalLahir = document.getElementById('inputTanggalLahir').value;

        if (nik.length === 16 && tanggalLahir !== "") {
            lanjutkanButton.style.backgroundColor = '#C02929';
        } else {
            lanjutkanButton.style.backgroundColor = '#E3E3E3'; // Warna asli
        }
    } else if (jenisNasabah === 'non_perorangan') {
        const npwp = document.getElementById('inputNPWP').value;
        const nikPendiri = document.getElementById('inputNIKPendiri').value;
        const tanggalPendirian = document.getElementById('inputTanggalPendirian').value;

        if (npwp !== "" && nikPendiri.length === 16 && tanggalPendirian !== "") {
            lanjutkanButton.style.backgroundColor = '#C02929';
        } else {
            lanjutkanButton.style.backgroundColor = '#E3E3E3'; // Warna asli
        }
    }
}

// Panggil fungsi checkInputs() setiap kali ada perubahan di kedua inputan
document.getElementById('inputNIK').addEventListener('input', checkInputs);
document.getElementById('inputTanggalLahir').addEventListener('input', checkInputs);
document.getElementById('inputNPWP').addEventListener('input', checkInputs);
document.getElementById('inputNIKPendiri').addEventListener('input', checkInputs);
document.getElementById('inputTanggalPendirian').addEventListener('input', checkInputs);

function limitInputNIK() {
    const inputNIK = document.getElementById("inputNIK");
    const inputValue = inputNIK.value;
    const inputNIKPendiri = document.getElementById("inputNIKPendiri");
    const inputValuePendiri = inputNIKPendiri.value;

    if (inputValue.length >= 16) {
        inputNIK.value = inputValue.substring(0, 16); // Truncate to 16 digits
    } 
    
    if (inputValuePendiri.length >= 16) {
        inputNIKPendiri.value = inputValuePendiri.substring(0, 16); // Truncate to 16 digits
    }
}