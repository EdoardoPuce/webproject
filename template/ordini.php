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
        <div>
            <p>Indirizzo: </p>
        </div>
        <div>
            <p>Paese: </p>
        </div>
        <div>
            <p>Citta: </p>
        </div>
    </fieldset>
    <fieldset class="riepilogo-ordine">
        <legend>Riepilogo Ordine</legend>
        <div>
            <label for="n-articoli">N° Articoli: 4</label>
        </div>
        <div>
            <label for="articoli">Costo Articoli: 32$</label>
        </div>
        <div>
            <label for="spedizione">Spedizione: 5$</label>
        </div>
        <div>
            <label for="totale">Totale: 37$</label><br/>
        </div>
        <div>
            <input type="button" name="Acquista" value="acquista" />
        </div>
    </fieldset>
</section>
