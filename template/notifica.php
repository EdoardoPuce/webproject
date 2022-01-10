<link rel="stylesheet" type="text/css" href="./css/notifica.css" />

<?php if(isUserLoggedIn()): ?>

    <?php

        if(isCliente()){
            $_SESSION["notifica"] = checkNotifiche($dbh, $_SESSION["notifica"]);

            if(isset($_POST['idN'])){
                $dbh->cancellaNotifica($_POST['idN']);
                unset($_SESSION["notifica"]);
                $_SESSION["notifica"] = getNotifiche($dbh);
                header("Refresh:0");
            }
            
        } else{
            $articoli = getNotificheRivenditore($dbh);
        }
        
    ?>



    <?php if(isCliente()): ?>

        <?php foreach($_SESSION["notifica"] as $ordine): ?>

            <article class="notifica">
                <Header class="testo_notifica">
                    <h3><?php echo "Ordine ".$ordine['idOrdine'].":"; ?></h3>
                    <p class="reset"><?php echo getStato($ordine['stato']); ?></p>
                </Header>
                <form method="POST">
                    <button type="submit" name="idN" value="<?php echo $ordine['idOrdine']; ?>">
                        <img alt="Cancella Notifica" src="<?php echo (UPLOAD_DIR ."delete.png") ?>">
                    </button>
                </form>
            </article>

        <?php endforeach?>

    <?php endif?>

    <?php if(!isCliente()): ?>

        <?php foreach($articoli as $articolo): ?>
        
            <article class="notifica">
                    <Header class="testo_notifica">
                        <h3><?php echo $articolo['nomeArticolo'].":"; ?></h3>
                        <p><?php echo verificaDisponibilita($articolo['qtaMagazzino']); ?></p>
                    </Header>
            </article>
        
        <?php endforeach?>

    <?php endif?>

<?php else:?>


<article class="notifica">
    <Header class="accesso">
        <h3>EFFETTUA L'ACCESSO</h3>
    </Header>
</article>

<?php endif?>
