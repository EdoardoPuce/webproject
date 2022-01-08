$(document).ready(function(){
    
    var paese = document.getElementsByClassName("clien");
    var piva = document.getElementsByClassName("riv");
    
    //controllo se il primo botton è stato selezionato
    if ($("#persona1").prop("checked", "true")){
        if(this.value == "1")
            {
                piva.hide();
            }
        else
            {
               paese.show(); 
            }
        
     }
        
});
   