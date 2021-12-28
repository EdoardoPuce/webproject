<?php
require_once 'bootstrap.php';

if(isset($_POST["email"]) && isset($_POST["password"])){ //controllo se email e password ci sono
    $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
    if(count($login_result)==0){
        //Login fallito
        $templateParams["errorelogin"] = "Errore! Email o password errate!";
    }
    else{
        //login effettuato con successo
        registerLoggedUser($login_result[0]);
    }
}

if(isUserLoggedIn()){
    $templateParams["titolo"] = "Cliente";
    $templateParams["nome"] = "login-home.php";
}
else{
    $templateParams["titolo"] = "Login";
    $templateParams["nome"] = "login-form.php";
}

require 'template/base.php';
?>