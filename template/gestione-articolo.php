<link rel="stylesheet" type="text/css" href="./css/gestione-articoli.css" />

<form>
<fieldset>
    <legend>Gestione Articolo</legend>
    <div class="left">
        <div >
            <label for="nome">Nome Articolo</label><input type="text" id="nome" name="nome" />
        </div>
        <div>
            <label for="descrizione">Descrizione</label><textarea type="text" id="descrizione" name="descrizione"></textarea>
        </div>
        <div>
            <label for="prezzo">Prezzo</label><input type="number" id="prezzo" name="prezzo" />
        </div>
        <div>
            <img src="" alt="">
        </div>
        <div>
            <label for="imgarticolo">Immagine Articolo</label><input type="file" id="img" name="img" />
        </div>
    </div>
    <div class="right">
        <div>
            <label for="taglia">Taglia:</label>
            <input type="radio" id="taglia" name="taglia" value="Unisex" /><label for="taglia">Unisex</label>
            <input type="radio" id="taglia" name="taglia" value="S" /><label for="taglia">S</label>
            <input type="radio" id="taglia" name="taglia" value="M" /><label for="taglia">M</label>
            <input type="radio" id="taglia" name="taglia" value="L" /><label for="taglia">L</label>
            <input type="radio" id="taglia" name="taglia" value="XL" /><label for="taglia">XL</label>
        </div>
        <div>
            <label for="qta">Quantita</label><input type="number" id="qta" name="qta" />
        </div>
        <div>
            <label for="categoria">categoria</label>
            <input type="radio" id="categoria" name="categoria" value="Unisex" /><label for="taglia">Unisex</label>
            <input type="radio" id="categoria" name="categoria" value="S" /><label for="taglia">S</label>
            <input type="radio" id="categoria" name="categoria" value="M" /><label for="taglia">M</label>
            <input type="radio" id="categoria" name="categoria" value="L" /><label for="taglia">L</label>
            <input type="radio" id="categoria" name="categoria" value="XL" /><label for="taglia">XL</label>
        </div>
        <div>
            <input type="submit" name="submit" value="Conferma" />
            <a href="#">Annulla</a>
        </div>
    </div>
</fieldset>
</form>
