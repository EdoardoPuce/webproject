
$(document).ready(function(){
     
    let piva = $("label.riv ");
    let paese = $(".clien ");

    document.getElementById("persona1").addEventListener('click', function(){
        piva.hide();
        paese.show();
    });

    document.getElementById("persona2").addEventListener('click', function(){
        paese.hide();
        piva.show();
    });
});
   