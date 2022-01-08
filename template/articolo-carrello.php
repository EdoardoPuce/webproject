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
                <form action="carrello.php?id=<?php echo ($articolo["idArticolo"]) ?>" method="post">
                    <input type="image" name="plus" src="<?php echo (UPLOAD_DIR ."add.png") ?>" alt="Aumenta quantità" />
                    <input type="image" name="minus" src="<?php echo (UPLOAD_DIR ."minus.png") ?>" alt = "Diminuisci quantità" />
                </form>
            </section>
        </article>
<?php endforeach;
} ?>