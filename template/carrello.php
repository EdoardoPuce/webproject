<link rel="stylesheet" type="text/css" href="./css/carrello.css" />
<section>
    <h1>Carrello</h1>
    <section class="carrello">
        <?php
        require("articolo-carrello.php")
        ?>
    </section>
    <form class="container"  method="post">
        <div class="dati">
            <section class="dati-spedizione">
                <fieldset>
                    <legend>Dati Spedizione</legend>
                    <div>
                        <label for="indirizzo">Indirizzo: <?php echo $templateParams['persona'][0]["indirizzo"] . " " . $templateParams['persona'][0]["civico"]; ?></label>
                    </div>
                    <div>
                        <label for="paese">Paese: <?php echo $templateParams['persona'][0]["paese"]; ?></label>
                    </div>
                    <div>
                        <label for="citta">Citta: <?php echo $templateParams['persona'][0]["citta"]; ?></label>
                    </div>
                </fieldset>
            </section>
            <div>
                <fieldset class="dati-pagamento">
                    <legend>Dati Pagamento</legend>
                    <div>
                        <label>Nome:</label><input type="text" id="nome" name="nome" />
                    </div>
                    <div>
                        <label>Cognome:</label><input type="text" id="cognome" name="cognome" />
                    </div>
                    <div>
                        <label>Codice carta:</label><input type="number" id="codice-carta" name="codice-carta" />
                    </div>
                    <div>
                        <label>Data:</label><input type="month" id="data" name="data" />
                    </div>
                    <div>
                        <label>Cvv:</label><input type="number" id="cvv" name="cvv" />
                    </div>
                </fieldset>
                <section class="riepilogo-ordine">
                    <h2>Riepilogo Ordine</h2>
                    <p>N° Articoli: <?php echo numeroArticoliInCarrello() ?></p>
                    <p>Costo Articoli: € <?php echo costoArticoliInCarrello() ?></p>
                    <p>Spedizione: € <?php if (numeroArticoliInCarrello() == 0) {
                                            echo 0;
                                        } else {
                                            echo $templateParams["costoSpedizione"];
                                        } ?></p>
                    <p>Totale: € <?php if (numeroArticoliInCarrello() == 0) {
                                        echo 0;
                                    } else {
                                        echo (costoArticoliInCarrello() + $templateParams["costoSpedizione"]);
                                    }
                                    ?></p>
                    <input type="submit" name="acquista" value="Acquista"/>
                </section>
            </div>
        </div>
    </form>
</section>

<script>

function submitForms(){
    //document.forms[0].submit();
    document.forms[1].submit();
}

</script>