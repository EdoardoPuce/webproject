<link rel="stylesheet" type="text/css" href="./css/articolo-carrello.css" />

<?php

if (isset($_SESSION["carrello"])) {
    foreach ($_SESSION["carrello"] as $articolo) : ?>
        <article>
            <header>
                <img src="<?php echo (UPLOAD_IMG . $articolo["imgArticolo"]) ?>" alt="" />
                <h2><?php echo ($articolo["nomeArticolo"]) ?></h2>
            </header>
            <section>
                <p>Prezzo: € <?php echo ($articolo["prezzo"]) ?></p>
                <p>Quantita:<?php echo ($articolo["qtaCarrello"]) ?></p>
                <div>
                    <img src="<?php echo (UPLOAD_DIR ."add.png") ?>" alt="" />
                    <img src="<?php echo (UPLOAD_DIR ."minus.png") ?>" alt="" />
                </div>
            </section>
        </article>
<?php endforeach;
} ?>