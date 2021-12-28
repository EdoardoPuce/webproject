<?php
require_once 'bootstrap.php';


//Home Template
$idarticolo = -1;
if(isset($_GET["id"])){
    $idarticolo = $_GET["id"];
}
$templateParams["articolo"] = $dbh->getArticoloById($idarticolo);

//Base Template
$templateParams["titolo"] = $templateParams["articolo"]["nomeArticolo"];
$templateParams["nome"] = "singolo-articolo.php";


require 'template/base.php';
?>