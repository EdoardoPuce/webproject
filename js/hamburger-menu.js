let nav = document.querySelector("body > nav");
let btn = document.querySelector("nav > ul > li:nth-child(4)");
let li = $("nav > ul > li:nth-child(-n+3)");
var div = document.createElement("div");
var ul = document.createElement("ul");


$(document).ready(function () {
    btn.addEventListener("click", function () {
       if(window.innerWidth < 768){
            if(li.css("display") == "none"){
                li.toggle("slide");
                li.css("display", "initial");
                document.querySelector("nav > ul > li:nth-child(4) > a > img").src = "./upload/left-arrow.png";
                $("nav > ul > li:nth-child(n+5)").css("display", "none");
                
           } else{
                li.toggle("slide");
                document.querySelector("nav > ul > li:nth-child(4) > a > img").src = "./upload/hamburger.png";
                $("nav > ul > li:nth-child(n+5)").css("display", "initial");
           }
       } 
    });
});