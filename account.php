<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";

//Home Template
//$templateParams["persona"] = $dbh->getPersonaByEmail("mario.bianchi@gmail.com",0);
$templateParams["persona"] = $dbh->getPersonaByEmail("giorgio.verdi@gmail.com");
$templateParams["ordini"] = $dbh->getOrder(1);    //$_SESSION["idcliente"]
//Base template
$templateParams["pg"] = $_GET["pg"];

require_once "template/base.php";
?>
