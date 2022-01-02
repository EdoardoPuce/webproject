<link href="/css/login.css" rel="stylesheet" type="text/css"/>
<div class="container">
<article>
    <form action="#" method="POST">
     <h2>Accedi</h2>
     <form method="POST"> 
        <input type="checkbox" id="persona1" name="persona1" value="cliente">
        <label for="cliente"> Cliente </label>
        <input type="checkbox" id="persona2" name="persona2" value="rivenditore">
        <label for="persona"> Rivenditore </label>
    </form>
     <p> Non sei ancora registrato?</p>
     <p><a href="/template/-form.php"> Registrati qui</a></p>
     <div class="login">
     <?php if(isset($templateParams["errorelogin"])): ?>
     <p><?php echo $templateParams["errorelogin"]; ?></p>
     <?php endif; ?>
     <form>
        <label for="email"> Email: </label>
        <input type="text" id="email" name="email"/>
        <label for="password"> Password: </label>
        <input type="password" id="password" name="password"/>
    </form>
    </div> 
    <form action="/template/homepage.php">
    <button type="submit"> Accedi </button>  
    </form>
    <p> Oppure accedi tramite:</p>
    <div class= "social">
        <div class="google">
        <button type="submit"> Google </button>
        </div>
        <div class="facebook">
        <button type="submit"> Facebook </button>
        </div>
    </div>
</article>
</div>