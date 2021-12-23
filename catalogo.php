<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Catalogo";
$templateParams["nome"] = "articoliInCatalogo.php";
$templeteParams["categorie"] = $dbh->getCategorie();

$templateParams["articoli"] = $dbh->getArticoli();


require_once "template/base.php";
?>
