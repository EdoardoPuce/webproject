<link rel="stylesheet" type="text/css" href="./css/notifica.css" />

<?php
    $ordini = getNotifiche($dbh);
?>

<?php if(isCliente()): ?>

    <?php foreach($ordini as $ordine): ?>

        <article class="notifica">
            <p class="testo_notifica"><?php echo "Ordine ".$ordine['idOrdine'].":"; ?></br><?php echo getStato($ordine['stato']); ?></p>
            <form>
                <input type="image" name="minus" src="<?php echo (UPLOAD_DIR ."delete.png") ?>" />
            </form>
        </article>

    <?php endforeach?>

<?php endif?>
