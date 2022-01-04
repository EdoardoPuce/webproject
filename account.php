<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";

$user = $dbh->getPersonaById(1,0);
registerLoggedUser($user[0],0);


//$templateParams["articoli"] = $dbh->getArticoloByRivenditore(1); 
$templateParams["pg"] = $_GET["pg"];

if (isUserLoggedIn() && isCliente()){ //cliente
    $templateParams["persona"] = $dbh->getPersonaById($_SESSION["idcliente"]);
    $templateParams["ordini"] = $dbh->getOrderByClient($_SESSION["idcliente"]);

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

} elseif (isUserLoggedIn() && !isCliente()) { //rivenditore
    $templateParams["persona"] = $dbh->getPersonaById($_SESSION["idcliente"], 0);
    $templateParams["articoli"] = $dbh->getArticoloByRivenditore($_SESSION["idcliente"]);

} else { // non loggato
    header("location: login.php");
}

require_once "template/base.php";
?>
