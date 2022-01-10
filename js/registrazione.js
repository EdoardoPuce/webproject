
$(document).ready(function(){
     
    let piva = $("label.riv ");
    let paese = $(".clien ");

    document.getElementById("cliente").addEventListener('click', function(){
        piva.hide();
        paese.show();
    });

    document.getElementById("rivenditore").addEventListener('click', function(){
        paese.hide();
        piva.show();
    });
});
   