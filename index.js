function updateClock() {
    var now = new Date();
    var clock = document.getElementById('clock');
    clock.textContent = now.toLocaleTimeString();
  }
  
  setInterval(updateClock, 1000);
  