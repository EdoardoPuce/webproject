<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "Catalogo";
$templateParams["nome"] = "articoliInCatalogo.php";
$templeteParams["categorie"] = $dbh->getCategorie();

$idcategoria = -1;
$idprezzo = -1;

if (count($_GET) == 2) {
    $idcategoria = $_GET["categoria"];
    $idprezzo = $_GET["prezzo"];
} else if (isset($_GET["categoria"])) {
    $idcategoria = $_GET["categoria"];
} else if (isset($_GET["prezzo"])) {
    $idprezzo = $_GET["prezzo"];
} else {
    $idcategoria = -1;
    $idprezzo = -1;
}
$templateParams["articoli"] = $dbh->getArticoliByCategoriaEPrezzo($idcategoria, $idprezzo);

if (count($templateParams["articoli"]) == 0) {
    $templateParams["articoli"] = $dbh->getArticoli();
    if( !($idcategoria == -1 && $idprezzo == -1)){
        $templateParams["messaggio"] = "Nessun articolo trovato";
    }
}


if( isset($_GET["ricerca"]) && $_GET["ricerca"] != ""){
    $ricerca = $_GET["ricerca"];
    $templateParams["articoli"] = $dbh->getArticoliByRicerca($ricerca);
} 

require_once "template/base.php";
