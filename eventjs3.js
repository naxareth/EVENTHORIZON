const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');

// Set the custom event date and time
const eventDate = '2024-07-22T02:00:00'; // format: YYYY-MM-DDTHH:MM:SS

const eventDateTime = new Date(eventDate);

// Set the custom timer date and time
const timerDate = new Date(eventDateTime.getTime() + 3600000); // add one hour

function updateCountdown() {
  const currentTime = new Date();
  let diff;

  if (currentTime < eventDateTime) {
    // Initial countdown
    diff = eventDateTime - currentTime;
  } else if (currentTime < timerDate) {
    // One-hour timer
    diff = timerDate - currentTime;
  } else {
    // Event has ended
    alert('The event has ended.');
    return;
  }

  const d = Math.floor(diff / 1000 / 60 / 60 / 24);
  const h = Math.floor(diff / 1000 / 60 / 60) % 24;
  const m = Math.floor(diff / 1000 / 60) % 60;
  const s = Math.floor(diff / 1000) % 60;

  days.innerHTML = d;
  hours.innerHTML = h < 10? '0' + h : h;
  minutes.innerHTML = m < 10? '0' + m : m;
  seconds.innerHTML = s < 10? '0' + s : s;

  if (currentTime < eventDateTime) {
    // Countdown has not ended
    if (diff <= 0) {
      // Countdown has ended, show alert message
      alert('Event has started!');
    }
  }
}

setInterval(updateCountdown, 1000);