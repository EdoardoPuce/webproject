<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";


//$templateParams["persona"] = $dbh->getPersonaByEmail("mario.bianchi@gmail.com",0);
$templateParams["persona"] = $dbh->getPersonaById(1);
$templateParams["ordini"] = $dbh->getOrderByClient(1);    //$_SESSION["idcliente"]
$templateParams["articoli"] = $dbh->getArticoloByRivenditore(1); 
$templateParams["pg"] = $_GET["pg"];


if(isset($templateParams["pg"]) && $templateParams["pg"] == 3){
    //$templateParams["IdOrdine"] = $_GET["idO"];
    
    $idOrdine = $_GET["idO"];       //Salvo l'id dell'Ordine

    $templateParams["stato"] = $dbh->getStatoByOrderId($idOrdine)[0]['stato']; //Ottengo lo stato della spedizione

    $ordine = $dbh->getOrderById($idOrdine);    //Ottengo l'ordine dal db
    
    $articoli = array();    //Array associativo contenente tutti gli articoli dell'ordine richiesto
    
    foreach($ordine as $rigaordine){
        $articolo = $dbh->getArticoloByid($rigaordine["idArticolo"]);  //Ottengo l'articolo dal db
        
        array_push($articoli,$articolo);  //Inserisco l'articolo nell'array di articoli       
    }
    $templateParams["articoli"] = $articoli;

    $templateParams["riepilogo"] = RiepilogoOrdine($ordine, $dbh);

  
}

require_once "template/base.php";
?>
