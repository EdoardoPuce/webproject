<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Carrello";
$templateParams["nome"] = "carrello.php";

$templateParams["costoSpedizione"] = 5;

$templateParams["persona"] = $dbh->getPersonaById(1);

if(isset($_POST["minus_x"])){
    diminuisciQtaArticoloInCarrello($_GET["id"]);
}

if(isset($_POST["plus_x"])){
    aumentaQtaArticoloInCarrello($_GET["id"]);
}

require 'template/base.php';
?>