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

    </footer>
</body>
</html>