<link rel="stylesheet" type="text/css" href="./css/registrazione.css" />
<script src='./js/registrazione.js' type="text/javascript"></script>
<section>
    <h2> Registrati! </h2>
    <div class="registrazione">
        <form method="POST">
            <h3> Sei un cliente o un rivenditore?</h3>
            <input type="radio" id="persona1" name="utente" value="1">
            <label for="cliente"> Cliente </label>
            <input type="radio" id="persona2" name="utente" value="0">
            <label for="rivenditore"> Rivenditore </label>
            <fieldset>
                <legend> Inserisci i dati:</legend>
                <label> Nome:</label>
                <input type="text" id="nome" name="nome" />
                <label> Cognome:</label>
                <input type="text" name="cognome" />
                <label class="riv"> P.iva:
                <input type="text" name="piva" />
                </label>
                <label class="clien">Paese:
                <input type="text" name="paese" />
                </label>
                <label> Città:</label>
                <input type="text" name="citta" />
                <label> Indirizzo:</label>
                <input type="text" name="indirizzo" />
                <label>Civico:</label>
                <input type="number" name="civico">
                <label> Cap:</label>
                <input type="number" name="cap" />
                <label> Email:</label>
                <input type="email" name="email" />
                <label> Password:</label>
                <input type="password" name="password" />
                <label> Conferma password:</label>
                <input type="password" name="conferma_password" />
            </fieldset>
            <button type="submit" name="submit" value="Registrati">Registrati</button>
            <button onclick="location.href ='login.php'">
            Annulla
           </button>
        </form>
    </div>
</section>

