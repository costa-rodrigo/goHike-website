document.getElementById("open-nav").addEventListener("click", openNav);
document.getElementById("close-nav").addEventListener("click", closeNav);

/* Open the sidenav */
function openNav() {
  document.getElementById("mobile-menu").style.width = "100%";
  document.getElementById("mobile-menu").style.display = "block";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mobile-menu").style.width = "0";
  document.getElementById("close-icon").style.display = "none";
}