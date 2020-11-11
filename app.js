var nav_btn = document.querySelector(".nav-btn");
var nav_links = document.querySelector(".nav-links");
var nav = document.querySelector("nav");
var expand_menu_btn = document.querySelector("#expand-menu");
var expanded_menu = document.querySelector(".expanded-menu");
var expanded = false;

nav_btn.addEventListener("click", function(){
    nav_links.classList.toggle("nav-active");
});

window.onscroll = function(){
  if(window.pageYOffset > 450){
    nav.classList.add('scrolled');
  } 
  else{
    nav.classList.remove('scrolled');
  }
}

expand_menu_btn.addEventListener("click", function(){
  expanded = !expanded;
  expanded_menu.classList.toggle("no-display");
  if(expanded == true){
    expand_menu_btn.innerHTML = "Close Menu";
    window.location.href = "#first-page";
  }
  else{
    expand_menu_btn.innerHTML = "View Full Menu";
    window.location.href = "#menu";
  }
})
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
dd=dd+1;
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

var mindate = yyyy+'-'+mm+'-'+dd;
dd=dd+8;
document.getElementById("datefield").setAttribute("min", mindate);