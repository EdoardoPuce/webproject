<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Home";
$templateParams["logo"] = "hiking.png";
//Home Template
$templateParams["nome"] = "template/homepage.php";
$templateParams["articolicasuali"] = $dbh->getRandomArticoli(3);

require 'template/base.php';
?>