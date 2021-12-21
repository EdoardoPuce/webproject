<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Catalogo";
$templateParams["nome"] = "articoliInCatalogo.php";


//Home Template
$templateParams["articoli"] = $dbh->getArticoli();
//Base template


require_once "template/base.php";
?>
