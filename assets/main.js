function autoDismissAlert() {
    setTimeout(function() {
        var alert = document.getElementById("successAlert");
        if (alert) {
            alert.classList.remove("show");
            alert.classList.add("fade");
        }
    }, 3000); // 3000 milisekundi = 3 sekunde
}

// Pozivanje funkcije kada stranica bude učitana
window.onload = function() {
    autoDismissAlert();
};

document.addEventListener("DOMContentLoaded", function () {
    const datumInput = document.getElementById("datum");
    const prikazDatuma = document.getElementById("prikazDatuma");

    if (datumInput && prikazDatuma) {
        datumInput.addEventListener("change", function () {
            prikazDatuma.textContent = this.value;
        });
    }
});


