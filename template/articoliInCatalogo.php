<link rel="stylesheet" type="text/css" href="./css/catalogo.css" />

<section class="ricerca">
    <form class="ricerca">
        <input type="image" src="./upload/search.png" alt="Submit" />
        <label for="ricerca">Ricerca:<input type="text" name="ricerca" id="ricerca" /></label>
    </form>
    <input type="button" value="Filtra" />
</section>

<aside>
    <form method="get">
        <fieldset>
            <legend>Filtra:</legend>
            <p>Categorie</p>
            <?php foreach ($templeteParams["categorie"] as $categoria) :
                $idcategoria = $categoria["idCategoria"] ?>
                <label for="<?php echo $idcategoria ?>"><input type="radio" name="categoria" value="<?php echo $idcategoria ?>" id="<?php echo $idcategoria ?>" /> <?php echo $categoria["nomeCategoria"] ?></label>
            <?php endforeach; ?>
            
            <p>Prezzo</p>
            <label for="economico"><input type="radio" name="prezzo" value="1" id="economico" /> €0 - €15</label>
            <label for="costoso"><input type="radio" name="prezzo" value="2" id="costoso" /> €15 - €50</label>
            <label for="moltocostoso"><input type="radio" name="prezzo" value="3" id="moltocostoso" /> > €50</label>
            <input type="submit" value="Filtra">
        </fieldset>
    </form>
</aside>

<section class="articoli">
    <?php if (isset($templateParams["messaggio"])) { ?>
        <p> <?php echo $templateParams["messaggio"] ?> </p>
    <?php };

    foreach ($templateParams['articoli'] as $articolo) :

        $qta = $articolo["qtaMagazzino"];
        $disponibilità = verificaDisponibilita($qta);
    ?>

        <div class="articolo">
            <a href="articolo.php?idArticolo=<?php echo ($articolo["idArticolo"]); ?>">
                <img class="prodotto" src='<?php echo UPLOAD_IMG . $articolo["imgArticolo"]; ?>' alt="<?php echo $articolo["nomeArticolo"] ?>" />
            </a>
            <p class="prezzo">€ <?php echo ($articolo["prezzo"]) ?> </p>
            <a href="articolo.php?idArticolo=<?php echo ($articolo["idArticolo"]); ?>"> <?php echo ($articolo["nomeArticolo"]) ?> </a>
            <p class="<?php echo $disponibilità ?>"> <?php echo $disponibilità ?></p>
        </div>

    <?php endforeach; ?>
</section>

<script src="./js/filtriCatalogo.js" type="text/javascript"></script>