<?php
session_start();
define("UPLOAD_DIR", "./upload/");
define("UPLOAD_IMG", "./upload/imgArticoli/");
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "progettowebdb", 3306 );
?>