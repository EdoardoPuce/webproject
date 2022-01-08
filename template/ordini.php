<link rel="stylesheet" type="text/css" href="./css/ordini.css" />

<section class="articoli">
    <?php 
        require("box-dettagli.php");
    ?>
</section>
<fieldset class="spedizione">
    <legend>Dettagli Spedizione</legend>
    <div class="spedizione">
        <img src="./upload/circle.png" alt="Ordine Effettuato">
        <h2>Ordine Effettuato</h2>
    </div>
    <div class="line"></div>
    <div class="spedizione">
        <img src="./upload/warehouse.png" alt="Ordine Preso in Carico">
        <h2>Ordine Preso In Carico</h2>
    </div>
    <div class="line"></div>
    <div class="spedizione">
        <img src="./upload/truck.png" alt="Ordine Spedito">
        <h2>Ordine Spedito</h2>
    </div>
    <div class="line"></div>
    <div class="spedizione">
        <img src="./upload/pin.png" alt="Arrivato a Destinazione">
        <h2>Arrivato a Destinazione</h2>
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
<script>
    var stato = <?php echo json_encode($idStato[0]["stato"], JSON_HEX_TAG); ?>;
    let divs = document.querySelectorAll("fieldset.spedizione > div:nth-child(even)");

    for (let i = 0 ; i <= stato ; i++){
        let img = divs[i].children[0];
        let h3 = divs[i].children[1];
        img.setAttribute("src", "./upload/tick-spedizione.png");
        h3.style.color = "#01b125";
        console.log(img);
}
</script>


