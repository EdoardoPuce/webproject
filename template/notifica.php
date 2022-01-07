<link rel="stylesheet" type="text/css" href="./css/notifica.css" />

<?php if(isUserLoggedIn()): ?>

    <?php

        if(isCliente()){
            $ordini = getNotifiche($dbh);
        } else{
            $articoli = getNotificheRivenditore($dbh);
        }

    ?>



    <?php if(isCliente()): ?>

        <?php foreach($ordini as $ordine): ?>

            <article class="notifica">
                <Header class="testo_notifica">
                    <h3><?php echo "Ordine ".$ordine['idOrdine'].":"; ?></h3>
                    <p><?php echo getStato($ordine['stato']); ?></p>
                </Header>
                <form>
                    <input type="image" name="minus" src="<?php echo (UPLOAD_DIR ."delete.png") ?>" />
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

<?php endif?>


<article class="notifica">
    <Header class="accesso">
        <h3>EFFETTUA L'ACCESSO</h3>
    </Header>
</article>
