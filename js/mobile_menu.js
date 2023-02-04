
//hamburger and overlay variables
let hamburger = document.querySelector('.nav_hamburger');
let mobileMenu = document.getElementById("mobileMenu");
let overlayLink = document.querySelectorAll('.nav_overlay-content--link');

//Hamburger overlay functions
let active = false;

const overlay = () => {

  if (active === false) {
    mobileMenu.style.display = "block";
    active = true;
  } else {
    mobileMenu.style.display = "none";
    active = false;
  }
};

overlayLink.forEach(item => {
  item.addEventListener('click', event => {
    mobileMenu.style.display = "none";
    active = false;
  })
});

hamburger.addEventListener("click", overlay);

//hamburger animation 
const menuBtn = document.querySelector('.mobile_btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});