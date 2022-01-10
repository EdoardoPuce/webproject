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
    if(isCliente()){
        $_SESSION["idUtente"] = $user["idCliente"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["nome"] = $user["nome"];
    } elseif (!isCliente()){
        $_SESSION["idUtente"] = $user["idRivenditore"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["nome"] = $user["nome"];
    }
}

function isCliente(){
    if($_SESSION['value'] == 1){
        return true;
    } elseif($_SESSION['value'] == 0) {
        return false;
    }
}

function checkPagamento(){
    if( $_POST['nome'] != "" 
        && $_POST['cognome'] != "" 
        && $_POST['codice-carta'] != "" 
        && $_POST['data'] != "" 
        && $_POST['cvv'] != ""  ){

        unset($_POST['nome']);
        unset($_POST['cognome']);
        unset($_POST['codice-carta']);
        unset($_POST['data']);
        unset($_POST['cvv']);
        unset($_POST['acquista']);

            return true;
        } else {
            return false;
        }
}

function inserireOrdine($dbh, $newId){

    $dbh->insertOrder($_SESSION["idUtente"]);

    foreach($_SESSION["carrello"] as $articolo){
        $dbh->insertOrderRow($articolo["qtaCarrello"],$articolo["idArticolo"], $newId);
        $dbh->decrementArticle($articolo["idArticolo"], $articolo["qtaCarrello"]);
    }

    svuotaCarrello();
}

function RiepilogoOrdine($ordine, $dbh){
    $nArticoli = 0;
    $costoArticoli = 0;
    $CostoSpedizione = 5;
    $Totale = 0;
    foreach($ordine as $rigaordine){
        $articolo = $dbh->getArticoloByid($rigaordine["idArticolo"]);  //Ottengo l'articolo dal db
        $nArticoli = $nArticoli + $rigaordine['qta'];
        $costoArticoli = $rigaordine['qta']*$articolo[0]['prezzo'];
        $Totale = $Totale + $costoArticoli;
    }
    $costoArticoli = $Totale;
    $Totale = $Totale + $CostoSpedizione;
    return array('nArticoli'=>$nArticoli, 'costoArticoli'=>$costoArticoli, 'spedizione'=>$CostoSpedizione, 'totale'=>$Totale);
}

function getNotifiche($dbh){
    return $dbh->getStatiByUser($_SESSION['idUtente']);
}

function getNotificheRivenditore($dbh){
    return $dbh->getArticoloNotificaRivenditore($_SESSION['idUtente']);
}

function getStato($stato){
    $result = "";
    switch($stato){
        case 0:
            $result = "Effettuato";
            break;
        case 1:
            $result = "Preso in Carico";
            break;
        case 2:
            $result = "Spedito";
            break;
        case 3:
            $result = "Arrivato a Destinazione";
            break;
    }
    return $result;
}

function isUserLoggedIn(){
    return !empty($_SESSION["idUtente"]);
}


function logout(){
    unset($_SESSION['idUtente']);
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['value']);
}


function checkCarrello($carrello){
    foreach($carrello as $articolo){
        if($articolo['qtaMagazzino'] >= 1){
        } else {
            return false;
        }
        return true;
    }
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

function aggiungiAlCarrello($articolo, $dbh){

    $qta = $dbh->checkQta($articolo["idArticolo"])[0]["qtaMagazzino"];
    if( $qta != 0 ){
        if(isset($_SESSION["carrello"])){
            $i = count($_SESSION["carrello"]);
            $_SESSION["carrello"][$i] = $articolo;

        } else{
            $_SESSION["carrello"][0] = $articolo;
        }
        aumentaQtaArticoloInCarrello($articolo["idArticolo"], $dbh);
        compattaCarrello();
    } else {
        echo '<script>alert("Quest\'articolo non è piu disponibile")</script>';
    }

}

function aumentaQtaArticoloInCarrello($idArticoloDaAumentare, $dbh){
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
    
        if ($_SESSION["carrello"][$i]["idArticolo"] == $idArticoloDaAumentare){
            if( isset($_SESSION["carrello"][$i]["qtaCarrello"])){
                $qta = $dbh->checkQta($_SESSION["carrello"][$i]["idArticolo"])[0]["qtaMagazzino"];
                if( $_SESSION["carrello"][$i]["qtaCarrello"] < $qta ){
                    $_SESSION["carrello"][$i]["qtaCarrello"] = $_SESSION["carrello"][$i]["qtaCarrello"] + 1;
                } else {
                    echo '<script>alert("Raggiunta la quantita di articoli disponibili in magazzino")</script>';
                }
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
                $_SESSION["carrello"] = array_values($_SESSION["carrello"]);
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

    if(isset($_SESSION["carrello"])){
        for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
            $numeroArticoli += $_SESSION["carrello"][$i]["qtaCarrello"];
        }
        return $numeroArticoli;
    }
    return $numeroArticoli;
}

function costoArticoliInCarrello(){
    $costoTotale = 0;
    if(isset($_SESSION["carrello"])){
    for($i = 0 ; $i < count($_SESSION["carrello"]) ; $i = $i+1){
        $costoTotale += $_SESSION["carrello"][$i]["qtaCarrello"] * $_SESSION["carrello"][$i]["prezzo"];
       }
       return $costoTotale;
    }
    return $costoTotale;
}
?>