const header = document.querySelector("header");

function capitalized() {
    
    var cap = document.getElementById("caps");
        cap.value=cap.value.charAt(0).toUpperCase() + cap.value.slice(1);
    var cap1 = document.getElementById("caps1");
        cap1.value=cap1.value.charAt(0).toUpperCase() + cap1.value.slice(1);
    var cap2 = document.getElementById("caps2");
        cap2.value=cap2.value.charAt(0).toUpperCase() + cap2.value.slice(1);
    //return str.charAt(0).toUpperCase() + str.slice(1);
}



window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 100);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar-nav');

menu.onclick = () =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

window.onscroll = () =>{
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
}

/// Nav-bar
 var home = document.getElementById("active");
 var about = document.querySelector(".activeAbout");
 var portfolio = document.querySelector(".activePortfolio");
 var contact = document.querySelector(".activeContact");

function homeRed(){
        home.style.color = "#ff0000";
        about.style.color = "#fff";
        portfolio.style.color = "#fff";
        contact.style.color = "#fff";
}

function aboutRed(){
    home.style.color = "#fff";
    about.style.color = "#ff0000";
    portfolio.style.color = "#fff";
    contact.style.color = "#fff";
}

function portRed(){
    home.style.color = "#fff";
    about.style.color = "#fff";
    portfolio.style.color = "#ff0000";
    contact.style.color = "#fff";
}

function conRed(){
    home.style.color = "#fff";
    about.style.color = "#fff";
    portfolio.style.color = "#fff";
    contact.style.color = "#ff0000";
}