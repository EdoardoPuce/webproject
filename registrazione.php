<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "Registrazione";
$templateParams["nome"] = "registrazione-form.php";

if(isset($_POST['submit']) && $_POST['submit'] == "Registrati"){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $piva = $_POST['piva'];
    $paese = $_POST['paese'];
    $citta = $_POST['citta'];
    $indirizzo = $_POST['indirizzo'];
    $civico = $_POST['civico'];
    $cap = $_POST['cap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conferma_password = $_POST['conferma_password'];

    $lungPassword = mb_strlen($password); //per confrontare password in seguito


    if (isset($_POST["utente"]) && $_POST['utente'] == "1"){
        if(isset($nome) && isset($cognome) && isset($paese)  && isset($citta) && isset($indirizzo) && isset($civico) && isset($cap) && isset($email) && isset($password) && isset($conferma_password)){
            $user = $dbh->checkEmail($email, $email);
            if(count($user) > 0) {
                echo '<script>alert("Email già esistente!")</script>';
            } 
            else{
                if($lungPassword < 8 || $lungPassword > 20) {
                    echo '<script>alert("Lunghezza minima password 8 caratteri.Lunghezza massima 20 caratteri")</script>';      
                } 
                else{
                    if(strcmp ($password,$conferma_password) == 0){
                        $password_hash = password_hash($password, PASSWORD_BCRYPT);

                        $dbh->aggiungiCliente($nome, $cognome , $paese, $citta, $indirizzo, $civico, $cap, $email, $password);
                        header("location: login.php");
                    }
                    else {
                        echo '<script>alert("Inserire password uguali!")</script>';
                    }
                }
            }
        }
        else {
            echo '<script>alert("Inserire tutti i dati!")</script>';
        }
    }  else{
        echo '<script>alert("Selezionare prima una opzione!")</script>';
    }

    if (isset($_POST["utente"]) && $_POST['utente'] == "0"){
        if(isset($nome) && isset($cognome) && isset($piva)  && isset($citta) && isset($indirizzo) && isset($civico) && isset($cap) && isset($email) && isset($password) && isset($conferma_password)){
            $user = $dbh->checkEmail($email, $email);
            if(count($user) > 0) {
                echo '<script>alert("Email già esistente!")</script>';
            } 
            else{
                if($lungPassword < 8 || $lungPassword > 20) {
                    echo '<script>alert("Lunghezza minima password 8 caratteri.Lunghezza massima 20 caratteri")</script>';      
                } 
                else{
                    if(strcmp ($password,$conferma_password) == 0){
                        $password_hash = password_hash($password, PASSWORD_BCRYPT);

                        $dbh->aggiungiRivenditore($nome, $cognome , $piva, $citta, $indirizzo, $civico, $cap, $email, $password);
                        header("location: login.php");
                    }
                    else {
                        echo '<script>alert("Inserire password uguali!")</script>';
                    }

                }
            }
        }
        else {
            echo '<script>alert("Inserire tutti i dati!")</script>';
        }

    } else{
        echo '<script>alert("Selezionare prima una opzione!")</script>';
    }
}

require 'template/base.php';
?>

              