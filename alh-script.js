function dropdownBtn() {
  document.querySelector("ul#menu-header-nav li ul").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('ul#menu-header-nav li button')) {
  const myDropdown = document.querySelector("ul#menu-header-nav li ul");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
