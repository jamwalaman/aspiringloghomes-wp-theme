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
  if (x.className === "main-menu") {
    x.className += " mob-link";
  } else {
    x.className = "main-menu";
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
