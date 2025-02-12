function openmenu() {
    document.getElementById('menu').style.right = "0";
  }
  function closemenu() {
    document.getElementById('menu').style.right = "-210px";
  }
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})