<?php
require_once 'bootstrap.php';

if(isUserLoggedIn()){
    header("location: index.php");
}
else{
    $templateParams["titolo"] = "Login";
    $templateParams["nome"] = "login-form.php";
    
}

//fase di login
if(isset($_POST["email"]) && isset($_POST["password"] && isset($_POST["submit"]))){ 
    $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
    if(count($login_result)==0){

        $templateParams["errorelogin"] = "Errore! Email o password errate!";
    }
    else{
        registerLoggedUser($login_result[0]);
        if ($_POST['cliente'] == "1"){
            $msg = 'Benvenuto cliente';
            $_SESSION['value'] == '1';   //salvo cliente
        } elseif ($_POST['rivenditore'] == '0'){
            $msg =  'Benvenuto rivenditore';
            $_SESSION['value'] == '0';    // salvo rivenditore
        } else {
            $msg = 'Si prega di fare una scelta' ;
        }
    }

require 'template/base.php';




/*

if ($_POST['cliente'] == "1"){
    echo 'benvenuto cliente';
    $_SESSION['value'] == '1';

    if(isset($_POST["email"]) && isset($_POST["password"])){ 
        $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
        if(count($login_result)==0){

            $templateParams["errorelogin"] = "Errore! Email o password errate!";
        }
        else{
            registerLoggedUser($login_result[0]);
        }
    else{
        echo 'Compilare tutti i campi!';
    }

else if ($_POST['rivenditore'] == '0'){
    echo 'benvenuto cliente';
    $_SESSION['value'] == '0';

    if(isset($_POST["email"]) && isset($_POST["password"])){ 
        $login_result = $dbh->checkLogin($_POST["email"], $_POST["password"]);
        if(count($login_result)==0){

            $templateParams["errorelogin"] = "Errore! Email o password errate!";
        }
        else{
            registerLoggedUser($login_result[0]);
        }
    else{
       echo 'Compilare tutti i campi!';
    }

else{
    $templateParams["errore1"] = "selezionare una scelta!";
}

if(isUserLoggedIn()){
    $templateParams["titolo"] = "Utente";
    $templateParams["nome"] = "login-form.php";
}
else{
    $templateParams["titolo"] = "Login";
    $templateParams["nome"] = "login-form.php";
}

require 'template/base.php';
?>
*/

?>
















/*

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
    $templateParams["nome"] = "login-form.php";
}
else{
    $templateParams["titolo"] = "Login";
    $templateParams["nome"] = "login-form.php";
}

require 'template/base.php';
*/
?>