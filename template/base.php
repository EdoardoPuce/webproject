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
                <a href="#">HomePage</a>
            </li>
            <li>
                <a href="#">Catalogo</a>
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
                <a href="#">
                    <img src="./upload/user.png" alt="Profilo Utente" >
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./upload/bell.png" alt="Notifiche" >
                </a>
            </li>
            <li>
                <a href="#">
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
                <h3>Pagamenti sicuri</h3>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'mastercard.png'; ?>" alt ="mastercard"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'paypal.png'; ?>" alt ="paypal"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'postepay.png'; ?>" alt ="postepay"/></div>
                <div class="pagamenti"><img src="<?php echo UPLOAD_DIR.'visa.png'; ?>" alt ="visa"/></div>
            </section><section class ="servizioClienti">
                <h3>Servizio clienti</h3>
                <a href="#">Contatti</a>
            </section><section class = "social">
                <h3>Seguici su</h3>
                <img src="<?php echo UPLOAD_DIR.'facebook.png'; ?>" alt ="facebook"/>
                <img src="<?php echo UPLOAD_DIR.'instagram.png'; ?>" alt ="instagram"/>
                <img src="<?php echo UPLOAD_DIR.'twitter.png'; ?>" alt ="twitter"/>
                <img src="<?php echo UPLOAD_DIR.'youtube.png'; ?>" alt ="youtube"/>
            </section>
        
    </footer>
</body>
</html>