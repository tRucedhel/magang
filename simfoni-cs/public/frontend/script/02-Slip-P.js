const radioButtons = document.querySelectorAll('input[type="radio"]');
const lanjutkanButton = document.querySelector('.c_slip-instance6');

// Nonaktifkan tombol "Lanjutkan" secara default
lanjutkanButton.disabled = true;

// Tambahkan event listener untuk setiap radio button
radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', () => {
        // Periksa apakah salah satu radio button telah dipilih
        const isAnyRadioButtonChecked = Array.from(radioButtons).some(rb => rb.checked);

        // Aktifkan atau nonaktifkan tombol "Lanjutkan" berdasarkan kondisi radio button yang dipilih
        lanjutkanButton.disabled = !isAnyRadioButtonChecked;

        // Tambahkan kelas "red-button" jika ada radio button yang dipilih, atau hapus jika tidak ada yang dipilih
        if (isAnyRadioButtonChecked) {
            lanjutkanButton.classList.add('red-button');
        } else {
            lanjutkanButton.classList.remove('red-button');
        }
    });
});

function changeNextButtonUrl(destinationUrl) {
    var lanjutkanButton = document.getElementById("lanjutkanButton");
    lanjutkanButton.onclick = function() {
        window.location.href = destinationUrl;
    };
}