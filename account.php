<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";


//$templateParams["persona"] = $dbh->getPersonaByEmail("mario.bianchi@gmail.com",0);
$templateParams["persona"] = $dbh->getPersonaByEmail("giorgio.verdi@gmail.com");
$templateParams["ordini"] = $dbh->getOrder(1);    //$_SESSION["idcliente"]

$templateParams["pg"] = $_GET["pg"];


if(isset($templateParams["pg"]) && $templateParams["pg"] == 3){
    //$templateParams["IdOrdine"] = $_GET["idO"];

    foreach($templateParams["ordini"][$_GET["idO"]] as $key=>$rigaordine){
        $articoli = array('idOrdine'=>$rigaordine['idOrdine'], 'idArticolo'=>$rigaordine[1], 'Qta'=>$rigaordine[2]);
        var_dump($key);
        //$ordine = array_push($dbh->getArticoloByid($ordini["idArticolo"]));
    }
  
}

//$templateParams["articoli"] = $dbh->getArticoloByid(1);

require_once "template/base.php";
?>
