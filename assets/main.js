function autoDismissAlert() {
    setTimeout(function() {
        var alert = document.getElementById("successAlert");
        if (alert) {
            alert.classList.remove("show");
            alert.classList.add("fade");
        }
    }, 3000); // 3000 milisekundi = 3 sekunde
}

// Pozivanje funkcije kada stranica bude ucitana
window.onload = function() {
    autoDismissAlert();
};

document.addEventListener("DOMContentLoaded", function () {
    const monthArray = document.getElementById('month-name').getAttribute('data-months').split(', ');
    let currentMonthIndex = parseInt(document.getElementById('month-name').getAttribute('data-current-month'));
  
    // Funkcija za ažuriranje meseca na osnovu index-a
    function updateMonth() {
      document.getElementById('current-month').innerText = monthArray[currentMonthIndex];
      // Ažuriranje vrednosti u skrivenom inputu
      document.getElementById('selected_month').value = monthArray[currentMonthIndex];
    }
  
    // Funkcija za sledeći mesec
    document.getElementById('next-month').addEventListener('click', function() {
      currentMonthIndex = (currentMonthIndex + 1) % monthArray.length;
      updateMonth();
    });
  
    // Funkcija za prethodni mesec
    document.getElementById('prev-month').addEventListener('click', function() {
      currentMonthIndex = (currentMonthIndex - 1 + monthArray.length) % monthArray.length;
      updateMonth();
    });
  
    // Prvo ažuriraj mesec pri učitavanju stranice
    updateMonth();
  });
  
  