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
                        <p>Indirizzo: <?php if(isUserLoggedIn()){   echo $templateParams['persona'][0]["indirizzo"] . " " . $templateParams['persona'][0]["civico"];}  ?></p>
                    </div>
                    <div>
                        <p>Paese: <?php  if(isUserLoggedIn()){ echo $templateParams['persona'][0]["paese"]; } ?></p>
                    </div>
                    <div>
                        <p>Citta: <?php  if(isUserLoggedIn()){ echo $templateParams['persona'][0]["citta"]; } ?></p>
                    </div>
                </fieldset>
            </section>
            <div>
                <fieldset class="dati-pagamento">
                    <legend>Dati Pagamento</legend>
                    <div>
                        <label>Nome:<input type="text" id="nome" name="nome" /></label>
                    </div>
                    <div>
                        <label>Cognome:<input type="text" id="cognome" name="cognome" /></label>
                    </div>
                    <div>
                        <label>Codice carta:<input type="number" id="codice-carta" name="codice-carta" /></label>
                    </div>
                    <div>
                        <label>Data:<input type="month" id="data" name="data" /></label>
                    </div>
                    <div>
                        <label>Cvv:<input type="number" id="cvv" name="cvv" /></label>
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