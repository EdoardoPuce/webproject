<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Account";
$templateParams["nome"] = "account.php";

$user = $dbh->getPersonaById(1,1);
registerLoggedUser($user[0],1);


$templateParams["pg"] = $_GET["pg"];

if (isUserLoggedIn() && isCliente()){ //cliente
    $templateParams["persona"] = $dbh->getPersonaById($_SESSION["idcliente"]);
    $templateParams["ordini"] = $dbh->getOrderByClient($_SESSION["idcliente"]);

    if(isset($templateParams["pg"]) && $templateParams["pg"] == 3){
        
        $idOrdine = $_GET["idO"];       //Salvo l'id dell'Ordine
        $templateParams["stato"] = $dbh->getStatoByOrderId($idOrdine)[0]['stato']; //Ottengo lo stato della spedizione
        $ordine = $dbh->getOrderById($idOrdine);    //Ottengo l'ordine dal db
        $articoli = array();    //Array associativo contenente tutti gli articoli dell'ordine richiesto
        
        foreach($ordine as $rigaordine){
            $articolo = $dbh->getArticoloByid($rigaordine["idArticolo"]);  //Ottengo l'articolo dal db
            array_push($articoli,$articolo);  //Inserisco l'articolo nell'array di articoli       
        }
        $templateParams["articoli"] = $articoli;
        $templateParams["riepilogo"] = RiepilogoOrdine($ordine, $dbh);
    }

} elseif (isUserLoggedIn() && !isCliente()) { //rivenditore
    $templateParams["persona"] = $dbh->getPersonaById($_SESSION["idcliente"], 0);
    $templateParams["articoli"] = $dbh->getArticoloByRivenditore($_SESSION["idcliente"]);

    //MODIFICA ARTICOLO
    if (isset($_POST["submit"]) and $_POST["submit"] == "Conferma" && isset($_GET["idA"])){
        $articoloModificato = array();
        array_push($articoloModificato, $_POST["nome"]);
        array_push($articoloModificato, $_POST["descrizione"]);
        array_push($articoloModificato, $_POST["taglia"]);
        array_push($articoloModificato, floatval($_POST["prezzo"]));
                
        if($_FILES["img"]["name"] == ""){
            array_push($articoloModificato, $dbh->getArticoloByid($_GET["idA"])[0]["imgArticolo"]  );
        } 
        //Aggiunge foto in da altre cartelle che in upload/imgArticoli
        else{                     
            $file = $_FILES['img'];
            var_dump($file);
            if (UPLOAD_ERR_OK === $file['error']) {
                $fileName = basename($file['name']);
                move_uploaded_file($file['tmp_name'], UPLOAD_IMG.DIRECTORY_SEPARATOR.$fileName);
            }
            array_push($articoloModificato, $file["name"]);
        } 

        array_push($articoloModificato, intval($_POST["qta"]));
        $idCategoria = $dbh->getCategoriaByName($_POST["categoria"])[0]["idCategoria"];
        array_push($articoloModificato, $idCategoria);
        $dbh->modificaArticolo( intval($_GET["idA"]),$articoloModificato);
        header("Refresh:0"); /* AGGIORNARE VISUALIZZAZIONE ARTICOLO DOPO LA MODIFICA NEL DB*/
    }

    //AGGIUNTA ARTICOLO 
    else if(isset($_POST["submit"]) and $_POST["submit"] == "Conferma" && !(isset($_GET["idA"]))){
        $nuovoArticolo = array();
        array_push($nuovoArticolo, $_POST["nome"]);
        array_push($nuovoArticolo, $_POST["descrizione"]);
        array_push($nuovoArticolo, $_POST["taglia"]);
        array_push($nuovoArticolo, floatval($_POST["prezzo"]));

        //Aggiunge foto in da altre cartelle che in upload/imgArticoli

        $file = $_FILES['img'];
        var_dump($file);
        if (UPLOAD_ERR_OK === $file['error']) {
            $fileName = basename($file['name']);
            move_uploaded_file($file['tmp_name'], UPLOAD_IMG . DIRECTORY_SEPARATOR . $fileName);
        }
        array_push($nuovoArticolo, $file["name"]); 
        array_push($nuovoArticolo, intval($_POST["qta"]));
        $idCategoria = $dbh->getCategoriaByName($_POST["categoria"])[0]["idCategoria"];
        array_push($nuovoArticolo, $idCategoria);
        array_push($nuovoArticolo, $templateParams["persona"][0]["idRivenditore"]);
        $dbh->aggiungiArticolo($nuovoArticolo);
        header("location: account.php?pg=2");
    }
} else { // non loggato
    header("location: login.php");
}

require_once "template/base.php";
?>
