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

let filter = document.querySelectorAll(".filter li");
let boxs = Array.from(document.querySelectorAll(".box"));

filter.forEach((li) => {
  li.addEventListener("click", remove_active);
  li.addEventListener("click", delete_box);
});

function remove_active(){
  filter.forEach((li) => {
    li.classList.remove("active");
    this.classList.add("active");
  });
}

function delete_box(){
  boxs.forEach((box) => {
    box.style.display = "none";
  });
  document.querySelectorAll(this.dataset.type).forEach((el) => {
    el.style.display = "block";
  })
}

window.addEventListener('scroll',
check_boxs);

check_boxs();

function check_boxs(){
  let trigger = window.innerHeight / 5 * 4;
  boxs.forEach(box => {
    let box_top = box .getBoundingClientRect().top;
    if(box_top < trigger){
      box.classList.add("show");
    }
    else{
      box.classList.remove("show");
    }
  });
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