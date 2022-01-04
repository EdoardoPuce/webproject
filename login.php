<?php
require_once 'bootstrap.php';

if(isset($_POST["email"]) && isset($_POST["password"])){ //controllo se email e password ci sono
    $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
    if(count($login_result)==0){
        //Login fallito
        $templateParams["errorelogin"] = "Errore! Email o password errate!";
    }
    else{
        
        if($_POST['persona1'] == "cliente"){
            registerLoggedUser($login_result[0],1); 
        }
        else {
            registerLoggedUser($login_result[0],0); 
        }

        //login effettuato con successo
        registerLoggedUser($login_result[0]);
    }
}

if(isUserLoggedIn()){
    $templateParams["titolo"] = "Cliente";
    $templateParams["nome"] = "index.php";
}
else{
    $templateParams["titolo"] = "Login";
    $templateParams["nome"] = "login-form.php";
}

require 'template/base.php';
?>