<link rel="stylesheet" type="text/css" href="./css/ordini.css" />

<section class="articoli">
    <?php 
        require("box-dettagli.php");
    ?>
</section>
<fieldset class="spedizione">
    <legend>Dettagli Spedizione</legend>
    <div>
        <img src="./upload/circle.png" alt="Ordine Effettuato">
        <h3>Ordine Effettuato</h3>
    </div>
    <div class="line"></div>
    <div>
        <img src="./upload/warehouse.png" alt="Ordine Preso in Carico">
        <h3>Ordine Preso In Carico</h3>
    </div>
    <div class="line"></div>
    <div>
        <img src="./upload/truck.png" alt="Ordine Spedito">
        <h3>Ordine Spedito</h3>
    </div>
    <div class="line"></div>
    <div>
        <img src="./upload/pin.png" alt="Arrivato a Destinazione">
        <h3>Arrivato a Destinazione</h3>
    </div>
</fieldset>
<section class="dati">
    <fieldset class="dati-spedizione">
        <legend>Dati Spedizione</legend>
        <p>Indirizzo: </p>
        <p>Paese: </p>
        <p>Citta: </p>
    </fieldset>
    <fieldset class="riepilogo-ordine">
        <legend>Riepilogo Ordine</legend>
        <p>N° Articoli: 4</p>
        <p>Costo Articoli: 32$</p>
        <p>Spedizione: 5$</p>
        <p>Totale: 37$</p>
    </fieldset>
</section>
