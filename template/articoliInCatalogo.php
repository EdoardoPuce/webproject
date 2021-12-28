<link rel="stylesheet" type="text/css" href="./css/catalogo.css" />

<section class="ricerca">
    <form class="rierca">
        <input type="image" src="./upload/search.png" alt="Submit" />
        <input type="text" name="ricerca" placeholder="Ricerca..." />
    </form>
    <input type="button" value="Filtra" />
</section>

<aside>
    <p>Categorie</p>
    <form method="get">
        <?php foreach ($templeteParams["categorie"] as $categoria) : ?>
            <li>
                <label><input type="radio" name="categoria" value="<?php echo $categoria["idCategoria"] ?>" /><?php echo $categoria["nomeCategoria"] ?></label>
            </li>
        <?php endforeach; ?>
        <p>Prezzo</p>
        <li>
            <label><input type="radio" name="prezzo" value="0-15">€0 - €15</label>
        </li>
        <li>
            <label><input type="radio" name="prezzo" value="15-50">€15 - €50</label>
        </li>
        <li>
            <label><input type="radio" name="prezzo" value=">50">> €50</label>
        </li>
        <input type="submit" value="Filtra" onclick="articoli-filtrati.php" />
</aside>

<section class="articoli">
    <?php if (isset($templateParams["messaggio"])) { ?>

        <p> <?php echo $templateParams["messaggio"] ?> </p>

    <?php };

    foreach ($templateParams['articoli'] as $articolo) : ?>

        <?php $qta = $articolo["qtaMagazzino"];
        if ($qta > 5) {
            $disponibilità = "Disponibile";
        } else if ($qta > 0 && $qta <= 5) {
            $disponibilità = "Ultimi pezzi";
        } else {
            $disponibilità = "Non disponibile";
        } ?>

        <div class="articolo">
            <img class="prodotto" src='<?php echo UPLOAD_IMG . $articolo["imgArticolo"]; ?>' alt="" />
            <p class="prezzo">€ <?php echo ($articolo["prezzo"]) ?> </p>
            <p class="nome"> <?php echo ($articolo["nomeArticolo"]) ?> </p>

            <p class="disponibilità" value="<?php echo $disponibilità ?>"> <?php echo $disponibilità ?>
            </p>
        </div>

    <?php endforeach; ?>
</section>

<script src="./js/filtriCatalogo.js" type="text/javascript"></script>