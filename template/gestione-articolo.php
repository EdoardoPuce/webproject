<link rel="stylesheet" type="text/css" href="./css/gestione-articoli.css" />
<?php 


if(isset($_GET["idA"])){
    $articolo = $dbh->getArticoloByid($_GET["idA"])[0];
    
}else{
    $articolo = array(
    "nomeArticolo" => "", 
    "descrizione" => "", 
    "taglia" => "", 
    "prezzo" => "",
    "imgArticolo" => "", 
    "qtaMagazzino" => "", 
    "categoria" => "", 
    );
}

$categorie = $dbh->getCategorie(); ?>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Gestione Articolo</legend>
        <div class="left">
            <div>
                <label for="nome">Nome Articolo</label><input type="text" id="nome" name="nome" value="<?php 
                 echo $articolo['nomeArticolo'];?>" />
            </div>
            <div>
                <label for="descrizione">Descrizione</label><textarea  id="descrizione" name="descrizione"><?php echo $articolo["descrizione"]; ?></textarea>
            </div>
            <div>
                <label for="prezzo">Prezzo</label><input type="number" step=".01" id="prezzo" name="prezzo" value="<?php echo ($articolo['prezzo']); ?>" />
            </div>
            <div>
                <img src="<?php echo (UPLOAD_IMG . $articolo["imgArticolo"]); ?>" alt="none">
            </div>
            <div>
                <label for="imgarticolo">Immagine Articolo</label><input type="file" id="imgarticolo" name="img"/>
            </div>
        </div>
        <div class="right">
            <div>
                <p>Taglia:</p>
                <label for="unisex"><input type="radio" id="unisex" name="taglia" value="unisex" <?php 
                    if ("unisex" == $articolo["taglia"]){ echo "checked"; } ?> />Unisex</label>
                <label for="s"><input type="radio" id="s" name="taglia" value="S" <?php 
                    if ("S" == $articolo["taglia"]){ echo "checked"; } ?>/>S</label>
                <label for="m"><input type="radio" id="m" name="taglia" value="M" <?php 
                    if ("M" == $articolo["taglia"]){ echo "checked"; } ?>/>M</label>
                <label for="l"><input type="radio" id="l" name="taglia" value="L"<?php 
                    if ("L" == $articolo["taglia"]){ echo "checked"; } ?> />L</label>
                <label for="xl"><input type="radio" id="xl" name="taglia" value="XL" <?php 
                    if ("XL" == $articolo["taglia"]){ echo "checked"; } ?>/>XL</label>
            </div>
            <div>
                <label for="qta">Quantita</label><input type="number" id="qta" name="qta" value="<?php echo ($articolo['qtaMagazzino']); ?>" />
            </div>
            <div>
                <p>Categoria</p>
                <div>
                    <?php foreach ($categorie as $categoria) :
                        if ($articolo["categoria"] == $categoria["idCategoria"]) { ?>
                            <div>
                            <label for="<?php echo ($categoria["nomeCategoria"])?>"><input type="radio" id="<?php echo ($categoria["nomeCategoria"])?>" name="categoria" value="<?php echo ($categoria["nomeCategoria"]); ?>" checked /><?php echo ($categoria["nomeCategoria"]); ?></label>
                            </div>
                        <?php } else { ?>
                            <div>
                            <label for="<?php echo ($categoria["nomeCategoria"])?>"> <input type="radio" id="<?php echo ($categoria["nomeCategoria"])?>" name="categoria" value="<?php echo ($categoria["nomeCategoria"]); ?>" /><?php echo ($categoria["nomeCategoria"]); ?></label>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Conferma"/>
                <a href="account.php?pg=2">Annulla</a>
            </div>
        </div>
    </fieldset>
</form>