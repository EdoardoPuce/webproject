<?php
session_start();
define("UPLOAD_DIR", "./upload/");
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "progettowebdb", 3306 );
?>