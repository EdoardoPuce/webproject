<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Home";
$templateParams["logo"] = "hiking.png";
//Home Template
$templateParams["articolicasuali"] = $dbh->getRandomArticoli(3);

$templateParams["nome"] = "template/homepage.php";
require 'template/base.php';
?>