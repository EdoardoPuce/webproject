<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Carrello";
$templateParams["nome"] = "carrello.php";

$templateParams["costoSpedizione"] = 5;

$templateParams["persona"] = $dbh->getPersonaById(1);

if(isset($_POST["minus_x"])){
    diminuisciQtaArticoloInCarrello($_GET["id"]);
}

if(isset($_POST["plus_x"])){
    aumentaQtaArticoloInCarrello($_GET["id"], $dbh);
}

if(isset($_POST['acquista'])){

    if(isUserLoggedIn()){

        if(isCliente()){

            if(!empty($_SESSION['carrello'][0]) && checkCarrello($_SESSION['carrello'])){

                if(checkPagamento()){
                    $lastid = $dbh->lastOrderId();
                    $newId = $lastid[0]["max(idOrdine)"]+1;
                    inserireOrdine($dbh,$newId);
                    header("location: account.php?pg=3&idO=".$newId);

                }else{
                    echo '<script>alert("Pagamento  Non Andata A Buon Fine, controlla i dati inseriti")</script>';
                }

            } else {
                echo '<script>alert("Un articolo non e\' disponibile oppure il Carrello e\' vuoto ")</script>';
            }

        } else{
            echo '<script>alert("Connettiti come Cliente")</script>';
        }
    } else {
        echo '<script>alert("Effettua l\'accesso come Utente")</script>';
        header("location: login.php");
    }
}

require 'template/base.php';
?>