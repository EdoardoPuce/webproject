<?php
require_once 'bootstrap.php';

if (isUserLoggedIn()) {
    if (isset($_GET['lg']) && $_GET['lg'] == 1) {
        logout();
    }
    $templateParams["nome"] = "account.php?pg=1";
}

$templateParams["titolo"] = "Login";
$templateParams["nome"] = "login-form.php";

if (isset($_POST["submit"])) {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        if (isset($_POST["utente"]) && $_POST['utente'] == "1") {
            $login_result = $dbh->checkLogin($_POST['utente'], $_POST["email"], $_POST["password"]);
            if (count($login_result) == 0) {
                echo '<script>alert("Errore! Email o password errate!")</script>';
            } else {
                $_SESSION['value'] = 1;   //salvo cliente
                registerLoggedUser($login_result[0]);
                header("location: account.php?pg=1");
            }
        } elseif (isset($_POST["utente"]) && $_POST['utente'] == '0') {

            $login_result = $dbh->checkLogin($_POST['utente'], $_POST["email"], $_POST["password"]);
            if (count($login_result) == 0) {
                echo '<script>alert("Errore! Email o password errate!")</script>';
            } else {
                $_SESSION['value'] = 0;    // salvo rivenditore
                registerLoggedUser($login_result[0]);
                header("location: account.php?pg=1");
            }
        } else {
<<<<<<< HEAD
            $_SESSION['value'] = 1;   //salvo cliente
            registerLoggedUser($login_result[0]);

            
            $_SESSION["notifica"] = getNotifiche($dbh);
            header("location: account.php?pg=1");
        }

    } elseif (isset($_POST["utente"]) && $_POST['utente'] == '0'){

        $login_result = $dbh->checkLogin($_POST['utente'],$_POST["email"], $_POST["password"]);
        if(count($login_result)==0){
            echo '<script>alert("Errore! Email o password errate!")</script>';
        } else {
            $_SESSION['value'] = 0;    // salvo rivenditore
            registerLoggedUser($login_result[0]);

            
            $_SESSION["notifica"] = getNotifiche($dbh);
            header("location: account.php?pg=1");
        }
    } else {
        echo '<script>alert("Si prega di fare una scelta")</script>';
=======
            echo '<script>alert("Si prega di fare una scelta")</script>';
        }
>>>>>>> 79890015bab2d2e27f115c5a0ee4b954e18e2353
    }
}
require 'template/base.php';
