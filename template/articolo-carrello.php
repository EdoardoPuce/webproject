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
                <p>Quantita: 1</p>
                <div>
                    <img src="./upload/add.png" alt="" />
                    <img src="./upload/minus.png" alt="" />
                </div>
            </section>
        </article>
<?php endforeach;
} ?>