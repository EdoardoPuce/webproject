<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Carrello";
$templateParams["nome"] = "carrello.php";

$templateParams["costoSpedizione"] = 5;

$templateParams["persona"] = $dbh->getPersonaById(1);

require 'template/base.php';
?>