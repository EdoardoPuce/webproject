const btnFiltra = document.querySelector("input[type='button'");

$(document).ready(function () {
    btnFiltra.addEventListener("click", function (){
        if( $("aside").attr("class") == "selected" ){
            $("aside").removeClass("selected");
            $("aside").slideUp("fast");
            $("div").css("margin", "10px 2%");
            $("section:nth-of-type(2)").css("width", "100%"); 
    
            }else {
            $("aside").addClass("selected");
            $("aside").slideDown();
            $("div").css("margin", "10px 1%");
            $("section:nth-of-type(2)").css("width", "80%");
            $("section:nth-of-type(2)").css("float", "right"); 
            

        
        }
    });
});