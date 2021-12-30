<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";


//$templateParams["persona"] = $dbh->getPersonaByEmail("mario.bianchi@gmail.com",0);
$templateParams["persona"] = $dbh->getPersonaByEmail("giorgio.verdi@gmail.com");
$templateParams["ordini"] = $dbh->getOrderByClient(1);    //$_SESSION["idcliente"]
$templateParams["pg"] = $_GET["pg"];


if(isset($templateParams["pg"]) && $templateParams["pg"] == 3){
    //$templateParams["IdOrdine"] = $_GET["idO"];
    
    $idOrdine = $_GET["idO"];       //Salvo l'id dell'Ordine
    
    $ordine = $dbh->getOrderById($idOrdine);    //Ottengo l'ordine dal db
    
    $articoli = array();    //Array associativo contenente tutti gli articoli dell'ordine richiesto
    
    foreach($ordine as $rigaordine){
        $articolo = $dbh->getArticoloByid($rigaordine["idArticolo"]);  //Ottengo l'articolo dal db
        
        array_push($articoli,$articolo);  //Inserisco l'articolo nell'array di articoli       
    }
    $templateParams["articoli"] = $articoli;

    $templateParams["riepilogo"] = RiepilogoOrdine($ordine, $dbh);
    var_dump($templateParams["riepilogo"]);

  
}

require_once "template/base.php";
?>
