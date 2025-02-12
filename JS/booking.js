function openmenu() {
  document.getElementById('menu').style.right = "0";
}
function closemenu() {
  document.getElementById('menu').style.right = "-210px";
}

let text = "Please Fill This Form...";
let index=1;
function writing(){
  document.getElementById("typing").textContent = text.slice(0,index);
  index++;
  if(index> text.length){
    index = 1;
  }
}
setInterval(function(){
  writing();
},150)
let loading = document.querySelector(".loading");
window.addEventListener("load", function () {
  loading.style.display = "none";
})