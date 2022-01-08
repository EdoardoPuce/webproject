


<link rel="stylesheet" type="text/css" href="./css/registrazione.css" />
<script src='./js/registrazione.js' type="text/javascript"></script>
<section>

    <h2> Registrati! </h2>
    <div class="registrazione">
        <form action="#" method="POST">
            <h3> Sei un cliente o un rivenditore?</h3>
            <input type="radio" id="persona1" name="utente" value="1">
            <label for="cliente"> Cliente </label>
            <input type="radio" id="persona2" name="utente" value="0">
            <label for="rivenditore"> Rivenditore </label>
            <fieldset>
                <legend> Inserisci i dati:</legend>
                <label> Nome:
                    <input type="text" id="nome" name="nome" />
                </label>
                <label> Cognome:
                    <input type="text" name="cognome" />
                </label>
                <label class="riv"> P.iva:
                    <input type="text" name="piva" />
                </label>
                <label class="clien">Paese:
                    <input type="text" name="paese" />
                </label>
                <label> Città:
                    <input type="text" name="città" />
                </label>
                <label> Indirizzo:
                    <input type="text" name="indirizzo" />
                </label>
                <label>Civico:
                    <input type="number" name="civico">
                </label>
                <label> Cap:
                    <input type="number" name="cap" />
                </label>
                <label> Email:
                    <input type="email" name="email" />
                </label>
                <label> Password:
                    <input type="password" name="password" />
                </label>
                <label> Conferma password:
                    <input type="password" name="password" />
                </label>
            </fieldset>
            <button type="submit" value="Registrati">Registrati</button>
            <button type="submit" value="Annulla">Annulla </button>
        </form>
    </div>


</section>

