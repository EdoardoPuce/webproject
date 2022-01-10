<link href="./css/login.css" rel="stylesheet" type="text/css"/>

<section>
    <h2>Accedi</h2>
    <p> Non sei ancora registrato?</p>
    <p><a href="registrazione.php"> Registrati qui</a></p>
    <div class="login">
        <form method="POST">
            <p> Sei un cliente o un rivenditore?</p>
            <fieldset>
            <label for="cliente"><input type="radio" id="cliente" name="utente" value="1">
             Cliente </label>
             <label for="rivenditore"><input type="radio" id="rivenditore" name="utente" value="0">
            Rivenditore </label> 
            </fieldset>
            
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email"/>
            <label for="password"> Password: </label>
            <input type="password" id="password" name="password"/>
            <input type="submit" name="submit" value="Accedi" />
        </form>
     </div>
    <p> Oppure accedi tramite:</p>
        <div class= "social">
            <div class="google">
                <button type="submit"> Google </button>
            </div>
            <div class="facebook">
                <button type="submit"> Facebook </button>
            </div>
        </div>
  </section>




