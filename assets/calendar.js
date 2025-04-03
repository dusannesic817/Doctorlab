document.addEventListener("DOMContentLoaded", function() {
    generateCalendar();
    document.getElementById("month-select").addEventListener("change", updateMonthTitle);
  });

  let startTime = null;
  let endTime = null;

  function generateCalendar() {
    const calendarContainer = document.getElementById("calendar");
    calendarContainer.innerHTML = ""; // Resetujemo prethodni sadržaj

    const times = ["08:00", "08:30", "09:00", "09:30", "10:00", "10:30", "11:00", "11:30", "12:00", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00"];
    const selectedMonth = document.getElementById("month-select").value;
    const today = new Date();
    const year = today.getFullYear();
    
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    
    let timeslotContainer = document.createElement("div");
    timeslotContainer.classList.add("timeslot-container");
    
    times.forEach(time => {
        let slot = document.createElement("div");
        slot.classList.add("timeslot");
        slot.innerText = time;
        slot.dataset.time = time;
        slot.onclick = () => selectTime(slot);
        timeslotContainer.appendChild(slot);
    });

    calendarContainer.appendChild(timeslotContainer);
    updateMonthTitle();
  }

  function selectTime(slot) {
    if (!startTime) {
        startTime = slot.dataset.time;
        slot.classList.add("selected");
    } else if (!endTime) {
        endTime = slot.dataset.time;
        highlightSelectedSlots();
    } else {
        resetSelection();
        selectTime(slot);
    }
  }

  function highlightSelectedSlots() {
    let selecting = false;
    document.querySelectorAll(".timeslot").forEach(slot => {
        if (slot.dataset.time === startTime || slot.dataset.time === endTime) {
            selecting = !selecting || endTime === startTime;
            slot.classList.add("selected");
        }
        if (selecting) {
            slot.classList.add("selected");
        }
    });
    updateSelectedTime();
  }

  function updateSelectedTime() {
    // Ovaj deo možeš koristiti ako želiš da prikažeš odabrano vreme
    // document.getElementById("selected-time").innerText = `${startTime} - ${endTime}`;
  }

  function resetSelection() {
    startTime = null;
    endTime = null;
    document.querySelectorAll(".timeslot").forEach(slot => slot.classList.remove("selected"));
  }

  function updateMonthTitle() {
    const monthSelect = document.getElementById("month-select");
    const selectedMonth = monthSelect.options[monthSelect.selectedIndex].text;
    const year = new Date().getFullYear();
    document.getElementById("month-title").innerText = `${selectedMonth} ${year}`;
    generateCalendar();
  }

  document.getElementById("submit-btn").addEventListener("click", function() {
    if (!startTime || !endTime) {
        alert("Please select a start and end time.");
        return;
    }
    const monthSelect = document.getElementById("month-select");
    const selectedMonth = monthSelect.options[monthSelect.selectedIndex].text;
    
    // Pošaljite selektovane podatke u back-end ovde
    fetch("/schedule/save", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            month: selectedMonth,
            year: new Date().getFullYear(),
            startTime: startTime,
            endTime: endTime
        })
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.error("Error:", error));
  });