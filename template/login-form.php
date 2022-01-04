<link href="./css/login.css" rel="stylesheet" type="text/css"/>

<section>
    <h2>Accedi</h2>
    <form method="POST"> 
        <input type="checkbox" id="persona1" name="persona1" value="cliente">
        <label for="cliente"> Cliente </label>
        <input type="checkbox" id="persona2" name="persona2" value="rivenditore">
        <label for="persona"> Rivenditore </label>
    </form>
    <p> Non sei ancora registrato?</p>
    <a href="form.php"> Registrati qui</a>
    <div class="login">
        <form action="#" method="POST">
            <?php if(isset($templateParams["errorelogin"])): ?>
            <p><?php echo $templateParams["errorelogin"]; ?></p>
            <?php endif; ?>
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email"/>
            <label for="password"> Password: </label>
            <input type="password" id="password" name="password"/>
            <input type="submit" name="submit" value="Accedi" />
        </form>
     </div> 
     <form action="./template/homepage.php">
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
            </form>
    </div>
    <?php 
    function logout 
    {
    unset($_SESSION['idcliente']);
}

?>
  </section>