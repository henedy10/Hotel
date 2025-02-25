function openmenu() {
  document.getElementById('menu').style.right = "0";
}
function closemenu() {
  document.getElementById('menu').style.right = "-210px";
}

let filter = document.querySelectorAll(".filter li");
let boxs = Array.from(document.querySelectorAll(".box"));

filter.forEach((li) => {
  li.addEventListener("click", remove_active);
  li.addEventListener("click", delete_box);
});

let active = document.querySelector(".filter .active");

function apper() {
  document.querySelector(`.${active.dataset.type}`).style.display = "block";
}

apper();

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
  document.querySelector(`.${this.dataset.type}`).style.display = "block";
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


let edit = document.querySelectorAll("td button");
let tab = document.querySelectorAll(".tab");
let parent = document.querySelector(".edit_tabs");
let btns = document.querySelectorAll(".btns .button");
let blur = document.querySelector(".blur");
let body = document.querySelector("body");

function apper_tab(){
  let tabElement = document.querySelector(`.${this.dataset.tab}`);
  if (tabElement.style.display !== "block") {
    tabElement.style.display = "block";
    parent.style.display = "block";
    blur.style.filter = "blur(2px)";
    body.style.overflow = "hidden";
  }
};


function delete_tab(){
  document.querySelector(`.${this.dataset.close}`).style.display = "none";
  parent.style.display = "none";
  blur.style.filter = "blur(0)";
  body.style.overflow = "initial";
};

edit.forEach((button) => {
  button.addEventListener("click", apper_tab);
});

btns.forEach((button) => {
  button.addEventListener("click", delete_tab);
});

function fchange() {
  document.getElementById('file').click();
  document.getElementById('submit').style.display = "block";
  blur.style.filter = "blur(2px)";
}
function fdelete() {
  document.getElementById('delete_tab').click();
  document.getElementById('delete').style.display = "block";
  blur.style.filter = "blur(2px)";
}
function deleteacc() {
  document.getElementById('delete_acc').click();
  document.getElementById('delete_account').style.display = "block";
  blur.style.filter = "blur(2px)";
}
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})