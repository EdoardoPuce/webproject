<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";

//Home Template

//Base template
$templateParams["pg"] = $_GET["pg"];

require_once "template/base.php";
?>
