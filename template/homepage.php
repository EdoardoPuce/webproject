<link rel="stylesheet" type="text/css" href="./css/homepage.css" />

<section class="intro">
    <h2>Parti per l'avventura!</h2>
    <p> Scopri tutto l'abbigliamento e l'attrezzatura da trekking,<br>
    lasciati ispirare dai nostri consigli e resta aggiornato sulle novità.</p>
</section>
<hr>
<img src="./upload/mountains.png" alt="logo">
<section class="artmom">
        <h3> Articoli del momento!</h3>
        <?php foreach($templateParams["articolicasuali"] as $articolocasuale): ?>
            <div class="articolo">
                <img src="<?php echo UPLOAD_IMG.$articolocasuale["imgArticolo"]; ?>" alt="" />
                <p><a href="articolo.php?idArticolo=<?php echo $articolocasuale["idArticolo"]; ?>"> <?php echo $articolocasuale["nomeArticolo"] ?></a></p>
                <p>€ <?php echo $articolocasuale["prezzo"]; ?></p>
            </div>
        <?php endforeach; ?>
</section>
<section class="allart">
    <h4> Catalogo </h4>
    <div class="colonna">  
        <p> Abbigliamneto da trekking</p>
            <ul>
                <li> Cappelli</li>
                <li> Maglie </li>
                <li> Pantaloni </li>
                <li> Guanti </li>
                <li> Calze </li>
             </ul>
        <a href="catalogo.php">Vedi tutti</a>
        </div>
        <div class="colonna">
            <p> Equipaggiamento da trekking</p>
            <ul>
                <li> Zaini </li>
                <li> Occhiali </li>
                <li> Binocoli </li>
                <li> Bussola </li>
                <li> Orologi </li>
           </ul>
           <a href="catalogo.php">Vedi tutti</a>
        </div>
        <div class="colonna">
            <p> Attrezzatura da trekking</p>
            <ul>
                <li> Tende Trekking  </li>
                <li> Materassini </li>
                <li> Fornelli </li>
                <li> Pasti pronti </li>
                <li> Stoviglie </li>
           </ul>
           <a href="catalogo.php">Vedi tutti</a>
        </div>
        <button onclick="location.href ='catalogo.php'">
        Scopri il catalogo completo
       </button>
 </section>