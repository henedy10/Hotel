function openmenu() {
  document.getElementById('menu').style.right = "0";
}
function closemenu() {
  document.getElementById('menu').style.right = "-210px";
}

let nums = document.querySelectorAll(".box .num");
let section2 = document.querySelector(".services");
let started2 = false;

function startCount(el) {
  let goal = el.dataset.num;
  let count = setInterval(() => {
    el.textContent++;
    if (el.textContent == goal) {
      clearInterval(count);
    }
  }, 900 / goal)
}

window.onscroll = function () {
  if (window.scrollY >= section2.offsetTop - 200) {
    if (!started2) {
      nums.forEach((num) => startCount(num));
    }
    started2 = true;
  }
}

let slider = document.querySelector(".slider");
let left = document.querySelector(".left");
let right = document.querySelector(".right");
let imgs = ['slider1.jpeg', 'slider2.jpeg', 'srv00.jpeg', 'room2.jpeg', 'room8.jpg'];

let id = 0;
function slide(id) {
  slider.style.backgroundImage = 'url("../Hotel/images/' + imgs[id] + '")';
  slider.classList.add("image-fade");
  setTimeout(() => {
    slider.classList.remove("image-fade");
  }, 550);
}

left.addEventListener('click', () => {
  id--;
  if (id < 0) {
    id = imgs.length - 1;
  }
  slide(id);
  console.log(id);
});

right.addEventListener('click', () => {
  id++;
  if (id > imgs.length - 1) {
    id = 0;
  }
  slide(id);
  console.log(id);
});
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})