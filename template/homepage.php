<link rel="stylesheet" type="text/css" href="./css/homepage.css" />

<section class="intro">
    <h2>Parti per l'avventura!</h2>
    <p> Scopri tutto l'abbigliamento e l'attrezzatura da trekking,<br>
        lasciati ispirare dai nostri consigli e resta aggiornato sulle novità.</p>
</section>
<section class="artmom">

    <h2> Articoli del momento!</h2>

    <?php foreach ($templateParams["articolicasuali"] as $articolocasuale) : ?>
        <div class="articolo">
            <img src="<?php echo UPLOAD_IMG . $articolocasuale["imgArticolo"]; ?>" alt="<?php echo $articolocasuale["nomeArticolo"] ?>" />
            <a href="articolo.php?idArticolo=<?php echo $articolocasuale["idArticolo"]; ?>"> <?php echo $articolocasuale["nomeArticolo"] ?></a>
            <p>€ <?php echo $articolocasuale["prezzo"]; ?></p>
        </div>
    <?php endforeach; ?>
</section>

<section class="allart">
    <h2> Catalogo </h2>
    <?php foreach ($templateParams["categoriecasuali"] as $categoriacasuale) : ?>
        <div class="colonna">
            <a href="catalogo.php?categoria=<?php echo $categoriacasuale["idCategoria"]?>"><?php echo $categoriacasuale["nomeCategoria"] ?></a>
        </div>
    <?php endforeach; ?>

    <button onclick="location.href ='catalogo.php'">
        Scopri il catalogo completo
    </button>
</section>