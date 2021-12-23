<?php
session_start();
define("UPLOAD_DIR", "./upload/");
define("UPLOAD_IMG", "./upload/imgArticoli/");
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "progettowebdb", 3306 );
?>
<script src="js/jquery-3.4.1.min.js"></script>