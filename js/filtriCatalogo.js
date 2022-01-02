const btnFiltra = document.querySelector("input[type='button']");


$(document).ready(function () {
    btnFiltra.addEventListener("click", function () {
        if ($("aside").attr("class") == "selected") {
            $("aside").removeClass("selected");
            $("aside").slideUp("fast");
            if (window.innerWidth < 768){
                smartphoneRimuoviFiltra()
            } else{
                screenRimuoviFiltra()
            }
           
        } else {
            $("aside").addClass("selected");
            $("aside").slideDown();
            if(window.innerWidth < 768){
                smartphoneFiltra();
            }else{
                screenFiltra();
            }          
        }
        $("div.footer").css("clear", "both");
    });
});

function smartphoneFiltra(){
    let section = $("section.articoli");
    section.css("width", "100%");
}

function smartphoneRimuoviFiltra(){
    let section = $("section.articoli");
    section.css("width", "100%");
}

function screenFiltra(){
    let section = $("section.articoli");
    section.css("width", "80%");
    section.css("float", "right");
}

function screenRimuoviFiltra(){
    let section = $("section.articoli");
    section.css("width", "100%");
    section.css("float", "none");
}