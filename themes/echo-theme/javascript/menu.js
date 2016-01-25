// selected elements
// CONTACT
var contactTrigger = document.getElementById('contact-trigger');
var contact = document.getElementById('contact');
// MENU
var navTrigger = document.getElementById('nav-trigger');
var nav = document.getElementById('nav');
var labels = document.getElementsByClassName('nav-label');

// sizing
var windowHeight = window.innerHeight;
var windowWidth = window.innerWidth;
var fontSize = windowHeight*0.1;


// Event Listening
contactTrigger.addEventListener('click', contactToggle);
navTrigger.addEventListener('click', navToggle);
window.addEventListener('resize', resize);


// REFACTOR -  should only need one toggle function, change to jQuery toggle class
function contactToggle(e) {
  var closed = (contactTrigger.className.indexOf('close') > 0);
  if(closed) {
    contactTrigger.className = 'contact-trigger open';
    contact.className = 'out';
  } else {
    contactTrigger.className = 'contact-trigger close';
    contact.className = 'in';
  }
}

function navToggle(e) {
  var closed = (navTrigger.className.indexOf('close') > 0);
  if(closed) {
    navTrigger.className = 'nav-trigger open';
    nav.className = 'out';
  } else {
    navTrigger.className = 'nav-trigger close';
    nav.className = 'in';
  }
}


function resize() {
  windowHeight = window.innerHeight;
  windowWidth = window.innerWidth;
  fontSize = windowHeight*0.1;

  for(var i = 0; i < labels.length; i++) {
    labels[i].style.fontSize = fontSize+'px';
    labels[i].style.height = fontSize+'px';
  }


  $(".container-fullscreen").css("min-height", window_height);

}



window.onload = resize;

