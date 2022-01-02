<?php

function uploadImage($path, $image){
    $imageName = basename($image["name"]);
    $fullPath = $path.$imageName;
    
    $maxKB = 500;
    $acceptedExtensions = array("jpg", "jpeg", "png", "gif");
    $result = 0;
    $msg = "";
    //Controllo se immagine è veramente un'immagine
    $imageSize = getimagesize($image["tmp_name"]);
    if($imageSize === false) {
        $msg .= "File caricato non è un'immagine! ";
    }
    //Controllo dimensione dell'immagine < 500KB
    if ($image["size"] > $maxKB * 1024) {
        $msg .= "File caricato pesa troppo! Dimensione massima è $maxKB KB. ";
    }

    //Controllo estensione del file
    $imageFileType = strtolower(pathinfo($fullPath,PATHINFO_EXTENSION));
    if(!in_array($imageFileType, $acceptedExtensions)){
        $msg .= "Accettate solo le seguenti estensioni: ".implode(",", $acceptedExtensions);
    }

    //Controllo se esiste file con stesso nome ed eventualmente lo rinomino
    if (file_exists($fullPath)) {
        $i = 1;
        do{
            $i++;
            $imageName = pathinfo(basename($image["name"]), PATHINFO_FILENAME)."_$i.".$imageFileType;
        }
        while(file_exists($path.$imageName));
        $fullPath = $path.$imageName;
    }

    //Se non ci sono errori, sposto il file dalla posizione temporanea alla cartella di destinazione
    if(strlen($msg)==0){
        if(!move_uploaded_file($image["tmp_name"], $fullPath)){
            $msg.= "Errore nel caricamento dell'immagine.";
        }
        else{
            $result = 1;
            $msg = $imageName;
        }
    }
    return array($result, $msg);
}

function registerLoggedUser($user){
    $_SESSION["idcliente"] = $user["idCliente"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["nome"] = $user["nome"];
}

function RiepilogoOrdine($ordine, $dbh){
    $nArticoli = count($ordine);
    $costoArticoli = 0;
    $CostoSpedizione = 5;
    $Totale = 0;
    foreach($ordine as $rigaordine){
        $articolo = $dbh->getArticoloByid($rigaordine["idArticolo"]);  //Ottengo l'articolo dal db
        $costoArticoli = $rigaordine['qta']*$articolo[0]['prezzo'];
        $Totale = $Totale + $costoArticoli;
    }
    $costoArticoli = $Totale;
    $Totale = $Totale + $CostoSpedizione;
    return array('nArticoli'=>$nArticoli, 'costoArticoli'=>$costoArticoli, 'spedizione'=>$CostoSpedizione, 'totale'=>$Totale);
}

function getStato($stato){
    $result = "";
    switch($stato){
        case 0:
            $result = "Ordine Effettuato";
            break;
        case 1:
            $result = "Ordine Preso in Carico";
            break;
        case 2:
            $result = "Ordine Spedito";
            break;
        case 3:
            $result = "Arrivato a Destinazione";
            break;
    }
}

function isUserLoggedIn(){
    return !empty($_SESSION['idcliente']);
}

function verificaDisponibilita($qta){
    if ($qta > 5) {
        $disponibilità = "Disponibile";
    } else if ($qta > 0 && $qta <= 5) {
        $disponibilità = "Ultimi pezzi";
    } else {
        $disponibilità = "Non disponibile";
    }
    return $disponibilità;
}

function aggiungiAlCarrello($articolo){

    if(isset($_SESSION["carrello"])){
        $i = count($_SESSION["carrello"]);
        $_SESSION["carrello"][$i] = $articolo;

    } else{
        $_SESSION["carrello"][0] = $articolo;
    }

    aumentaQtaArticoloInCarrello($articolo["idArticolo"]);
    compattaCarrello();

}

function aumentaQtaArticoloInCarrello($idArticoloDaAumentare){
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
    
        if ($_SESSION["carrello"][$i]["idArticolo"] == $idArticoloDaAumentare){
            if( isset($_SESSION["carrello"][$i]["qtaCarrello"])){
                $_SESSION["carrello"][$i]["qtaCarrello"] = $_SESSION["carrello"][$i]["qtaCarrello"] + 1;
            } else{
                $_SESSION["carrello"][$i]["qtaCarrello"] = 1;
            }
        }    
    }
}

function diminuisciQtaArticoloInCarrello($idArticoloDaAumentare){
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){

        if ($_SESSION["carrello"][$i]["idArticolo"] == $idArticoloDaAumentare){
            if( $_SESSION["carrello"][$i]["qtaCarrello"] > 1 ){
                $_SESSION["carrello"][$i]["qtaCarrello"] = $_SESSION["carrello"][$i]["qtaCarrello"] - 1;
            } else{
                unset($_SESSION["carrello"][$i]);
            }
        }    
    }
}

function compattaCarrello(){
    //RIMUOVO GLI ARTICOLI DUPLICATI NEL CARRELLO
    $arrayId = array();
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
        
        if ( in_array( $_SESSION["carrello"][$i]["idArticolo"], $arrayId)){ //SE l'elemento E' GIA' presente
            unset($_SESSION["carrello"][$i]);
        } else {
            array_push($arrayId, $_SESSION["carrello"][$i]["idArticolo"]); //Se l'elemento NON E' GIA' PRESENTE
        }
    }
} 

function svuotaCarrello(){
    unset($_SESSION["carrello"]);
}

function numeroArticoliInCarrello(){
    $numeroArticoli = 0;
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
        $numeroArticoli += $_SESSION["carrello"][$i]["qtaCarrello"];
    }
    return $numeroArticoli;
}

function costoArticoliInCarrello(){
    $costoTotale = 0;
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
        $costoTotale += $_SESSION["carrello"][$i]["qtaCarrello"] * $_SESSION["carrello"][$i]["prezzo"];
    }
 
    return $costoTotale;
}
?>