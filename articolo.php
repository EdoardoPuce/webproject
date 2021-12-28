<?php
require_once 'bootstrap.php';


//Home Template
$idarticolo = -1;
if(isset($_GET["idArticolo"])){
    $idarticolo = $_GET["idArticolo"];
}

$templateParams["articolo"] = $dbh->getArticoloById($idarticolo);

//Base Template
$templateParams["titolo"] = $templateParams["articolo"][0]["nomeArticolo"];
$templateParams["nome"] = "singolo-articolo.php";


require 'template/base.php';
?>