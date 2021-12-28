<?php 
require_once 'bootstrap.php';

$templateParams["titolo"] = "Catalogo";
$templateParams["nome"] = "articoliInCatalogo.php";
$templeteParams["categorie"] = $dbh->getCategorie();

$idcategoria= -1;
if(isset($_GET["categoria"])){
    $idcategoria = $_GET["categoria"];
    $Categoria = $dbh->getCategoriaById($idcategoria);
    $templateParams["articoli"] = $dbh->getArticoliByCategoria($idcategoria);

    if(count($templateParams["articoli"]) == 0){
        $templateParams["messaggio"]= "Nessun articolo trovato per questa categoria: ".$Categoria[0]["nomeCategoria"];
        $templateParams["articoli"] = $dbh->getArticoli();
    }
}

else{
    $templateParams["articoli"] = $dbh->getArticoli();
}

require_once "template/base.php";

?>
