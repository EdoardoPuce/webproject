let btn = document.querySelector("nav > ul > li:nth-child(4)");
let li = $("nav > ul > li:nth-child(-n+3)");

let btnNotifiche = document.querySelector("nav > ul > li:nth-child(6) > a");
let notifiche = $(".notifiche");

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


    btnNotifiche.addEventListener("click", function () {
        if(notifiche.css("display") == "none"){
            notifiche.slideDown();
        } else {
            notifiche.slideUp();
        }
     });



});

window.onresize = function(){ 
    if(window.innerWidth > 768){ 
        $("nav > ul > li").css("display", "initial");
        $("nav > ul > li:nth-child(4)").css("display", "none");
    }else{ 
        $("nav > ul > li:nth-child(-n+3").css("display", "none");
        $("nav > ul > li:nth-child(4)").css("display", "initial");
        document.querySelector("nav > ul > li:nth-child(4) > a > img").src = "./upload/hamburger.png";
    }
}
