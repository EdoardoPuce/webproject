<link href="registrazione.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="registrazione.js" type="text/javascript"></script>

<section>
    <h2> Registrati! </h2>
    <div class="registrazione">
    <form action="#" method="POST">
    <h3> Sei un cliente o un rivenditore?</h3> 
    <input type="radio" id="persona1" name="utente" value="1">
    <label for="cliente"> Cliente </label>
    <input type="radio" id="persona2" name="utente" value="0">
    <label for="rivenditore"> Rivenditore </label>
    <fieldset><legend> Inserisci i dati:</legend>
        <label> Nome:
        <input type="text" id="nome"  name="nome"/>
        </label>
        <label> Cognome:
        <input type="text" name="cognome"/>
        </label>
        <label class="riv"> P.iva:
        <input type="text" name="piva"/>
        </label>
        <label class="clien">Paese:
        <input type="text" name="paese"/>
        </label>
        <label> Città:
        <input type="text" name="città"/>
        </label>
        <label> Indirizzo:
        <input type="text" name="indirizzo"/>
        </label>
        <label>Civico:
        <input type="number" name="civico">
        </label>
        <label> Cap:
        <input type="number"  name="cap"/>
        </label>
        <label> Email:
        <input type="email" name="email"/>
        </label>
        <label> Password:
        <input type="password" name="password"/>
        </label>
        <label> Conferma password:
        <input type="password" name="password"/>
        </label>
    </fieldset>
        <button type="submit" value="Registrati">Registrati</button>
        <button type="submit" value="Annulla">Annulla </button>
    </form>
    </div>
 

</section>



<!--
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

-->