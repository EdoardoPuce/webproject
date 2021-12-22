<link rel="stylesheet" type="text/css" href="./css/carrello.css" />
<section>
    <h1>Carrello</h1>
    <section class="carrello">
        <?php 
            require("articolo-carrello.php")
        ?>
    </section>
    <div class="dati">
        <section class="dati-spedizione">
            <h2>Dati Spedizione</h2>
            <ul>
                <li>
                    <label for="indirizzo">Indirizzo:</label><input type="text" id="indirizzo" name="indirizzo" />
                </li>
                <li>
                    <label for="paese">Paese:</label><input type="text" id="paese" name="paese" />
                </li>
                <li>
                    <label for="citta">Citta:</label><input type="text" id="citta" name="citta" />
                </li>
            </ul>
        </section>
        <div>
            <section class="dati-pagamento">
                <h2>Dati Pagamento</h2>
                <ul>
                    <li>
                        <label for="nome">Nome:</label><input type="text" id="nome" name="nome" />
                    </li>
                    <li>
                        <label for="cognome">Cognome:</label><input type="text" id="cognome" name="cognome" />
                    </li>
                    <li>
                        <label for="codice-carta">Codice carta:</label><input type="text" id="codice-carta" name="codice-carta" />
                    </li>
                    <li>
                        <label for="data">Data:</label><input type="month" id="data" name="data" />
                    </li>
                    <li>
                        <label for="cvv">Cvv:</label><input type="text" id="cvv" name="cvv" />
                    </li>
                </ul>
            </section>
            <section class="riepilogo-ordine">
            <h2>Riepilogo Ordine</h2>
                <ul>
                    <li>
                        <label for="articoli">Costo Articoli:</label>
                    </li>
                    <li>
                        <label for="spedizione">Spedizione:</label>
                    </li>
                    <li>
                        <label for="totale">Totale:</label>
                    </li>
                    <li>
                        <label for="data">Data:</label>
                    </li>
                    <li>
                        <input type="button" name="Acquista" value="acquista" />
                    </li>
                </ul>
            </section>
        </div>
    </div>
</section>