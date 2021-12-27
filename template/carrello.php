<link rel="stylesheet" type="text/css" href="./css/carrello.css" />
<section>
    <h1>Carrello</h1>
    <section class="carrello">
        <?php 
            require("articolo-carrello.php")
        ?>
    </section>
    <div class="dati">
        <form class="dati-spedizione">
            <fieldset>
                <legend>Dati Spedizione</legend>
                <div>
                    <label for="indirizzo">Indirizzo:</label><input type="text" id="indirizzo" name="indirizzo"/>
                </div>
                <div>
                    <label for="paese">Paese:</label><input type="text" id="paese" name="paese" />
                </div>
                <div>
                    <label for="citta">Citta:</label><input type="text" id="citta" name="citta" />
                </div>
            </fieldset>
        </form>
        <div>
            <form class="dati-pagamento">
                <fieldset >
                    <legend>Dati Pagamento</legend>
                    <div>
                        <label for="nome">Nome:</label><input type="text" id="nome" name="nome" />
                    </div>
                    <div>
                        <label for="cognome">Cognome:</label><input type="text" id="cognome" name="cognome" />
                    </div>
                    <div>
                        <label for="codice-carta">Codice carta:</label><input type="text" id="codice-carta" name="codice-carta" />
                    </div>
                    <div>
                        <label for="data">Data:</label><input type="month" id="data" name="data" />
                    </div>
                    <div>
                        <label for="cvv">Cvv:</label><input type="text" id="cvv" name="cvv" />
                    </div>
                </fieldset>
            </form>
            <section class="riepilogo-ordine">
                <h2>Riepilogo Ordine</h2>
                <p>N° Articoli: 4</p>
                <p>Costo Articoli: 32$</p>
                <p>Spedizione: 5$</p>
                <p>Totale: 37$</p>
                <form>
                    <input type="button" name="Acquista" value="acquista" />
                </form>
            </section>
        </div>
    </div>
</section>