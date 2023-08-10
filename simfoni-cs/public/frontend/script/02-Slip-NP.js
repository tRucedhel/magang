function changeNextButtonUrl(destinationUrl) {
    var lanjutkanButton = document.getElementById("lanjutkanButton");
    lanjutkanButton.onclick = function() {
        window.location.href = destinationUrl;
    };
}