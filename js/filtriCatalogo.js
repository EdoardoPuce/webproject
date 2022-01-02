const btnFiltra = document.querySelector("input[type='button'");

$(document).ready(function () {
    btnFiltra.addEventListener("click", function (){
        if( $("aside").attr("class") == "selected" ){
            $("aside").removeClass("selected");
            $("aside").slideUp("fast");
            $("div.articolo").css("margin", "10px 2%");
            $("section.articoli").css("width", "100%");
            $("div.footer").css("clear", "both");
    
            }else {
            $("aside").addClass("selected");
            $("aside").slideDown();
            $("div.articolo").css("margin", "10px 1%");
            $("section.articoli").css("width", "80%");
            $("section.articoli").css("float", "right"); 
            $("div.footer").css("clear", "both");       
        }
    });
});