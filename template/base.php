<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <header>
        <img src="./upload/hiking.png" alt="" >
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">HomePage</a>
            </li>
            <li>
                <a href="catalogo.php">Catalogo</a>
            </li>
            <li>
                <a href="#">Contatti</a>
            </li>

            <li>
                <a href="#">
                    <img src="./upload/hamburger.png" alt="Menu" >
                </a>
            </li>
            <li>
                <a href="account.php?pg=1">
                    <img src="./upload/user.png" alt="Profilo Utente" >
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./upload/bell.png" alt="Notifiche" >
                </a>
                <section class="notifiche">
                    
                </section>
            </li>
            <li>
                <a href="carrello.php">
                    <img src="./upload/cart.png" alt="Carrello" >
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <?php
            if(isset($templateParams["nome"])){
                require($templateParams["nome"]);
            }
        ?>
    </main>
    <footer>
        <div class = "footer">
            <hr> 
            <img src="<?php echo UPLOAD_DIR."mountains.png"?>" alt=""/>
        </div>
        
            <section class="pagamentiSicuri">
                <h2>Pagamenti sicuri</h2>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'mastercard.png'; ?>" alt ="mastercard"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'paypal.png'; ?>" alt ="paypal"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'postepay.png'; ?>" alt ="postepay"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'visa.png'; ?>" alt ="visa"/></div>
            </section><section class ="servizioClienti">
                <h2>Servizio clienti</h2>
                <a href="#">Contatti</a>
            </section><section class = "social">
                <h2>Seguici su</h2>
                <img src="<?php echo UPLOAD_DIR.'facebook.png'; ?>" alt ="facebook"/>
                <img src="<?php echo UPLOAD_DIR.'instagram.png'; ?>" alt ="instagram"/>
                <img src="<?php echo UPLOAD_DIR.'twitter.png'; ?>" alt ="twitter"/>
                <img src="<?php echo UPLOAD_DIR.'youtube.png'; ?>" alt ="youtube"/>
            </section>
        
    </footer>
</body>
</html>
<script src = "./js/hamburger-menu.js" type = "text/javascript"></script>