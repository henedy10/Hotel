let gust = document.querySelector(".counter")
let positive = document.querySelector(" .arrows .pos")
let negative = document.querySelector(" .arrows .neg")
let x = 0;

positive.addEventListener("click", () => {
  if (x < 8) {
    x++;
    gust.setAttribute("data-count", x)
  }
});

negative.addEventListener("click", () => {
  x > 1 ? ((x--), gust.setAttribute("data-count", x)) : ""
})

function openmenu() {
  document.getElementById('menu').style.right = "0";
}
function closemenu() {
  document.getElementById('menu').style.right = "-210px";
}

let landingpage = document.querySelector(".landing-page");
let imgarr = ["room7.jpg", "room8.jpg", "room9.jpg", "room13.jpg", "room14.jpg"];

setInterval(() => {
  let randomnum = Math.floor(Math.random() * imgarr.length);
  landingpage.style.backgroundImage = 'url("../Hotel/images/' + imgarr[randomnum] + '")';
}, 5000)

let sect = document.querySelector(".best_prices");
let card = document.querySelector(".brown_card");
let reached = false;

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

let nums = document.querySelectorAll(".box .num");
let section2 = document.querySelector(".services");
let prog_spans = document.querySelectorAll(".prog-hold span");
let started2 = false;

window.onscroll = function () {
  if (window.scrollY >= sect.offsetTop - 100) {
    if (!reached) {
      card.style.transform = "translateZ(12px)";
    }
    reached = true;
  }

  if (window.scrollY >= section.offsetTop - 200) {
    if (!started) {
      startCount(document.querySelector(".numm"));
    }
    started = true;
  }

  if (window.scrollY >= section2.offsetTop - 200) {
    prog_spans.forEach((span) => {
      span.style.width = span.dataset.width;
    })
    if (!started2) {
      nums.forEach((num) => startCount(num));
    }
    started2 = true;
  }
}
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})