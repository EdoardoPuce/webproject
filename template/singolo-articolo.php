<link rel="stylesheet" type="text/css" href="./css/articolo.css" />
<?php if (count($templateParams["articolo"]) == 0) : ?>
    <article>
        <p>Articolo non presente</p>
    </article>
<?php
    else :
        $articolo = $templateParams["articolo"][0];
        $disponibilità = verificaDisponibilita($articolo["qtaMagazzino"]);
?>
    <article>
        <div class="img">
            <img src="<?php echo UPLOAD_IMG . $articolo["imgArticolo"]; ?>" alt="<?php $articolo["nomeArticolo"] ?>" />
        </div>
        <header>
            <h1><?php echo $articolo["nomeArticolo"]; ?></h1>
            <p class="prezzo">€ <?php echo $articolo["prezzo"]; ?></p>
            <form method = "post">
                <input type="submit" value="Aggiungi al carrello" name = "submit"/>
            </form>
        </header>
        <section>
            <p>Taglia: <?php echo $articolo["taglia"]; ?></p>
            <div class="recensione">
                <img src="<?php echo UPLOAD_DIR . "stellerecensioni.png" ?>" alt="" />
                <p> (760 recensioni)</p>
            </div>
            <p class="<?php echo $disponibilità ?>"><?php echo $disponibilità ?></p>
            <p><?php echo $articolo["descrizione"]; ?></p>
        </section>
    </article>
<?php endif; ?>