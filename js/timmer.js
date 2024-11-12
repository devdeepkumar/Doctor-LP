
/*
=================================================
? => Timmer Js :----
=================================================
*/




function getNextMondayMidnight() {
    const now = new Date();
    const dayOfWeek = now.getDay(); // Get the current day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
    const daysUntilNextMonday = (8 - dayOfWeek) % 7 || 7; // Calculate days until next Monday
    const nextMondayMidnight = new Date(now);

    // Set the time to next Monday at 00:00 AM
    nextMondayMidnight.setDate(now.getDate() + daysUntilNextMonday);
    nextMondayMidnight.setHours(0, 0, 0, 0);

    return nextMondayMidnight;
}

function padZero(value) {
    return value < 10 ? `0${value}` : value;
}

function updateCountdown() {
    const now = new Date();
    const nextMonday = getNextMondayMidnight();
    const timeDiff = nextMonday - now;

    // Calculate time left in days, hours, minutes, and seconds
    const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    // Update the HTML with padded zeros
    document.querySelector('.days').textContent = padZero(days);
    document.querySelector('.hours').textContent = padZero(hours);
    document.querySelector('.minutes').textContent = padZero(minutes);
    document.querySelector('.seconds').textContent = padZero(seconds);

    // If the time is up, reset the countdown
    if (timeDiff <= 0) {
        setTimeout(() => {
            updateCountdown(); // Start again
        }, 1000);
    }
}

// Update the countdown every second
setInterval(updateCountdown, 1000);
