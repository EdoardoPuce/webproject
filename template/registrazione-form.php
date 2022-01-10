<link rel="stylesheet" type="text/css" href="./css/registrazione.css" />
<script src='./js/registrazione.js' type="text/javascript"></script>
<section>
    <h2> Registrati! </h2>
    <div class="registrazione">
        <form method="POST">
            <h3> Sei un cliente o un rivenditore?</h3>
            <fieldset>
                <legend>Scegli tipologia utente:</legend>
                <label for="cliente"><input type="radio" id="cliente" name="utente" value="1">
                    Cliente </label>
                <label for="rivenditore"><input type="radio" id="rivenditore" name="utente" value="0">
                    Rivenditore </label>
            </fieldset>
            <fieldset>
                <legend> Inserisci i dati:</legend>
                <label for="nome"> Nome:
                    <input type="text" id="nome" name="nome" /></label>
                <label for="cognome"> Cognome:
                    <input type="text" name="cognome" id="cognome" /></label>
                <label class="riv" for="piva"> P.iva:
                    <input type="text" name="piva" id="piva" />
                </label>
                <label class="clien" for="paese">Paese:
                    <input type="text" name="paese" id="paese" />
                </label>
                <label for="citta"> Città:
                    <input type="text" name="citta" id="citta" /></label>
                <label for="indirizzo"> Indirizzo:
                    <input type="text" name="indirizzo" id="indirizzo" /></label>
                <label for="civico">Civico:
                    <input type="number" name="civico" id="civico"></label>
                <label for="cap"> Cap:
                    <input type="number" name="cap" id="cap" /></label>
                <label for="email"> Email:
                    <input type="email" name="email" id="email" /></label>
                <label for="password"> Password:
                    <input type="password" name="password" id="password" /></label>
                <label for="conferma_password"> Conferma password:
                    <input type="password" name="conferma_password" id="conferma_password" /></label>
            </fieldset>
            <button type="submit" name="submit" value="Registrati">Registrati</button>
        </form>
    </div>
</section>