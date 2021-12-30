<link href="registrazione.css" rel="stylesheet" type="text/css"/>
<h1> Registrati! </h1>
<h2> Sei un cliente o un rivenditore?</h2>

<form>
    <fieldset><legend>Utente</legend>
        <select name="utente" >
        <option value="cliente" selected="selected">Cliente</option>
        <option value="rivenditore"> Rivenditore </option>
        </select>
    </fieldset>
</form>

<form action="#" method="POST">
    <fieldset><legend> Registrazione:</legend>
        <label> Nome:
        <input type="text"  name="nome"/>
        </label><br>
        <label> Cognome:
        <input type="text" name="cognome"/>
        </label><br>
        <label>Indirizzo:
        <input type="text" name="indirizzo"/>
        </label><br>
        <label>Civico:
        <input type="number" name="civico">
        </label><br>
        <label> Città:
        <input type="text" name="città"/>
        </label><br>
        <label> Provincia:
        <input type="text" name="provincia"/>
        </label><br>
        <label> Cap:
        <input type="number"  name="cap"/>
        </label><br>
        <label> P.iva:
        <input type="text" name="città"/>
        </label><br>
        <label> Email:
        <input type="email" name="email"/>
        </label><br>
        <label> Password:
        <input type="password" name="password"/>
        </label><br>
        <label> Conferma password:
        <input type="password" name="password"/>
        </label><br>
        </fieldset>
    <button type="submit" value="Registrati">Registrati</button>
    <button type="submit" value="Annulla">Annulla </button>
    </form>
