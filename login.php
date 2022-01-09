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
if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["submit"]) ){ 
    if (isset($_POST["utente"]) && $_POST['utente'] == "1"){
        $login_result = $dbh->checkLogin($_POST['utente'],$_POST["email"], $_POST["password"]);
        if(count($login_result)==0){
            echo '<script>alert("Errore! Email o password errate!")</script>';
        } else {
            registerLoggedUser($login_result[0]);

            $_SESSION['value'] = 1;   //salvo cliente
            header("location: index.php");
        }

    } elseif (isset($_POST["utente"]) && $_POST['utente'] == '0'){

        $login_result = $dbh->checkLogin($_POST['utente'],$_POST["email"], $_POST["password"]);
        if(count($login_result)==0){
            echo '<script>alert("Errore! Email o password errate!")</script>';
        } else {
            registerLoggedUser($login_result[0]);

            $_SESSION['value'] = 0;    // salvo rivenditore
            header("location: index.php");
        }
    } else {
        echo '<script>alert("Si prega di fare una scelta")</script>';
    }

    

}

require 'template/base.php';
?>


