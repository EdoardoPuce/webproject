<head>
    <link rel="stylesheet" type="text/css" href="./css/account.css" />
    <script src="./js/account.js" type="text/javascript"></script>
</head>


<section>
    <h1>Account</h1>
    <aside class="account-menu">
        <a href="account.php?pg=1">Dati</a>
        <hr>
        <a href="account.php?pg=2">Ordini</a>
    </aside>
    <?php if($templateParams['pg'] == 1): ?>
    <section class="account">
        <?php 
            require("dati-personali.php");
        ?>
    </section>
    <?php endif ?>

    <?php if($templateParams['pg'] == 2): ?>
    <section class="account">
        <?php 
            require("box-dettagli.php");
        ?>
    </section>
    <?php endif ?>

    <?php if($templateParams['pg'] == 3): ?>
        <?php 
            require("ordini.php");
        ?>
    <?php endif ?>

    <?php if($templateParams['pg'] == 4): ?>
    <section class="account">
        <?php 
            require("gestione-articolo.php");
        ?>
    </section>
    <?php endif ?>


</section>