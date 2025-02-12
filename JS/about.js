function openmenu() {
  document.getElementById('menu').style.right = "0";
}
function closemenu() {
  document.getElementById('menu').style.right = "-210px";
}

let num = document.querySelector(".numm");
let section = document.querySelector(".bay_view");
let started = false;

function startCount(el) {
  let goal = el.dataset.num;
  let count = setInterval(() => {
    el.textContent++;
    if (el.textContent == goal) {
      clearInterval(count);
    }
  }, 90)
}

window.onscroll = function () {
  if (window.scrollY >= section.offsetTop - 200) {
    if (!started) {
      startCount(document.querySelector(".numm"));
    }
    started = true;
  }
}
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})