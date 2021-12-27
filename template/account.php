<link rel="stylesheet" type="text/css" href="./css/account.css" />

<section>
    <h1>Account</h1>
    <aside class="account-menu">
        <a href="#">Dati</a>
        <hr>
        <a href="#">Ordini</a>
        <hr>
        <a href="#">Gestione Articoli</a>
    </aside>
        <!--
    <section class="account">
        <?php 
            require("box-dettagli.php");
        ?>
    </section>
        -->
    <?php 
        require("ordini.php");
    ?>

</section>