function dropdownBtn() {
  document.querySelector("#menu-header-nav li ul").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('#menu-header-nav li button')) {
  const myDropdown = document.querySelector("#menu-header-nav li ul");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

// Hamburger icon for mobile
function mobileBtn() {
  const x = document.querySelector(".main-menu");
  const logo = document.querySelector(".logo-main");
  const mob = document.querySelector(".mobileicon");
  if (x.className === "main-menu") {
    x.className += " mob-link";
    logo.className += " hide-logo";
    mob.className += " white-icon"
  } else {
    x.className = "main-menu";
    logo.className = "wp-block-image size-medium is-resized logo-main";
    mob.className = "mobileicon";
  }
}

// Toggle 'scrolled' class when user scrolls down
window.addEventListener('scroll', function() {
  const header = document.querySelector('.alh-header');
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
