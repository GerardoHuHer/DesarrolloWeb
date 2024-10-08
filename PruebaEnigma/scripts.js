const circle = document.getElementById('rotatingCircle');

function rotateCircle() {
  circle.classList.add('rotate');
}

// To rotate on click
circle.addEventListener('click', rotateCircle);

// To rotate automatically every 3 seconds
setInterval(rotateCircle, 3000);