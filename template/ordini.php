<link rel="stylesheet" type="text/css" href="./css/ordini.css" />

<section class="articoli">
    <?php 
        require("box-dettagli.php");
    ?>
</section>
<fieldset class="spedizione">
    <legend>Dettagli Spedizione</legend>
    <div id="spedizione">
        <img src="./upload/circle.png" alt="Ordine Effettuato">
        <h3>Ordine Effettuato</h3>
    </div>
    <div class="line"></div>
    <div id="spedizione">
        <img src="./upload/warehouse.png" alt="Ordine Preso in Carico">
        <h3>Ordine Preso In Carico</h3>
    </div>
    <div class="line"></div>
    <div id="spedizione">
        <img src="./upload/truck.png" alt="Ordine Spedito">
        <h3>Ordine Spedito</h3>
    </div>
    <div class="line"></div>
    <div id="spedizione">
        <img src="./upload/pin.png" alt="Arrivato a Destinazione">
        <h3>Arrivato a Destinazione</h3>
    </div>
</fieldset>
<section class="dati">
    <fieldset class="dati-spedizione">
        <legend>Dati Spedizione</legend>
        <p><?php echo "Indirizzo: ".$templateParams["persona"][0]["indirizzo"]." ".$templateParams["persona"][0]["civico"]?></p>
        <p><?php echo "Paese: ".$templateParams["persona"][0]["paese"]?></p>
        <p><?php echo "Citta: ".$templateParams["persona"][0]["citta"]?></p>
    </fieldset>
    <fieldset class="riepilogo-ordine">
        <legend>Riepilogo Ordine</legend>
        <p>N° Articoli: <?php echo $templateParams["riepilogo"]["nArticoli"]?></p>
        <p>Costo Articoli: <?php echo $templateParams["riepilogo"]["costoArticoli"]?> $</p>
        <p>Spedizione: <?php echo $templateParams["riepilogo"]["spedizione"]?> $</p>
        <p>Totale: <?php echo $templateParams["riepilogo"]["totale"]?> $</p>
    </fieldset>
</section>
<?php 
    $idOrdine = intval($_GET["idO"]);
    $idStato =  $dbh->getStatoByOrderId($idOrdine);
?>
<meta name = "idStato" content = "<?php echo $idStato[0]["stato"] ?>" />
<script src = "./js/statoOrdine.js" type="text/javascript"></script>
