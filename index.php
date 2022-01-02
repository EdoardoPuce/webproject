<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Home";
$templateParams["logo"] = "hiking.png";
//Home Template
$templateParams["articolicausali"] = $dbh->getRandomArticoli(3);

require 'template/base.php';
?>