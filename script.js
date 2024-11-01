var countDownDate = new Date("Nov 20, 2024 15:37:25").getTime();

var x = setInterval(function () {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


// Selecting the menu button, user button, and their respective navbars
let menuBtn = document.getElementById('menu-btn');
let navbar = document.querySelector('.navbar');
let userBtn = document.getElementById('login-btn');
let userNavbar = document.getElementById('user-navbar');

// Toggle the visibility of the menu when the menu icon is clicked
menuBtn.onclick = () => {
  navbar.classList.toggle('active');
  // Hide the user menu if it is visible
  userNavbar.classList.remove('active');
}

// Toggle the visibility of the user menu when the user icon is clicked
userBtn.onclick = () => {
  userNavbar.classList.toggle('active');
  // Hide the menu if it is visible
  navbar.classList.remove('active');
}

// Optional: Hide both menus if clicked outside of them
window.onclick = (event) => {
  if (event.target !== userBtn && !userNavbar.contains(event.target)) {
    userNavbar.classList.remove('active');
  }
  if (event.target !== menuBtn && !navbar.contains(event.target)) {
    navbar.classList.remove('active');
  }
}


