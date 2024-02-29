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

function mobileBtn() {
  var x = document.querySelector(".menu");
  if (x.className === "menu") {
    x.className += " mob-link";
  } else {
    x.className = "menu";
  }
}
