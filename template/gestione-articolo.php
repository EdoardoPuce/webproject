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

<form method="post">
    <fieldset>
        <legend>Gestione Articolo</legend>
        <div class="left">
            <div>
                <label for="nome">Nome Articolo</label><input type="text" id="nome" name="nome" value="<?php 
                if (isset($articolo['nomeArticolo'])){echo $articolo['nomeArticolo'];}?>" />
            </div>
            <div>
                <label for="descrizione">Descrizione</label><textarea type="text" id="descrizione" name="descrizione"><?php if(isset($articolo["descrizione"])){echo $articolo["descrizione"];} ?></textarea>
            </div>
            <div>
                <label for="prezzo">Prezzo</label><input type="number" step=".01" id="prezzo" name="prezzo" value="<?php echo ($articolo['prezzo']); ?>" />
            </div>
            <div>
                <img src="<?php echo (UPLOAD_IMG . $articolo["imgArticolo"]); ?>" alt="none">
            </div>
            
            
            <div>
                <label for="imgarticolo">Immagine Articolo</label><input type="file" id="img" name="img"/>
            </div>
        </div>
        <div class="right">
            <div>
                <label for="taglia">Taglia:</label>
                <input type="radio" id="taglia" name="taglia" value="unisex" <?php 
                    if ("unisex" == $articolo["taglia"]){ echo "checked"; } ?> /><label for="taglia">Unisex</label>
                <input type="radio" id="taglia" name="taglia" value="S" <?php 
                    if ("S" == $articolo["taglia"]){ echo "checked"; } ?>/><label for="taglia">S</label>
                <input type="radio" id="taglia" name="taglia" value="M" <?php 
                    if ("M" == $articolo["taglia"]){ echo "checked"; } ?>/><label for="taglia">M</label>
                <input type="radio" id="taglia" name="taglia" value="L"<?php 
                    if ("L" == $articolo["taglia"]){ echo "checked"; } ?> /><label for="taglia">L</label>
                <input type="radio" id="taglia" name="taglia" value="XL" <?php 
                    if ("XL" == $articolo["taglia"]){ echo "checked"; } ?>/><label for="taglia">XL</label>
            </div>
            <div>
                <label for="qta">Quantita</label><input type="number" id="qta" name="qta" value="<?php echo ($articolo['qtaMagazzino']); ?>" />
            </div>
            <div>
                <label for="categoria">Categoria</label>
                <div>
                    <?php foreach ($categorie as $categoria) :
                        if ($articolo["categoria"] == $categoria["idCategoria"]) { ?>
                            <div>
                                <input type="radio" id="categoria" name="categoria" value="<?php echo ($categoria["nomeCategoria"]); ?>" checked /><label for="categoria"><?php echo ($categoria["nomeCategoria"]); ?></label>
                            </div>
                        <?php } else { ?>
                            <div>
                                <input type="radio" id="categoria" name="categoria" value="<?php echo ($categoria["nomeCategoria"]); ?>" /><label for="categoria"><?php echo ($categoria["nomeCategoria"]); ?></label>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Conferma"/>
                <a href="#">Annulla</a>
            </div>
        </div>
    </fieldset>
</form>