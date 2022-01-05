<link rel="stylesheet" type="text/css" href="./css/homepage.css" />

<section class="intro">
    <h1>Parti per l'avventura!</h1>
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
                <p><a href="#"><?php echo $articolocasuale["nomeArticolo"]; ?></a></p>
                <p>€ <?php echo $articolocasuale["prezzo"]; ?></p>
            </div>
        <?php endforeach; ?>
</section>

<section class="allart">
    <h4> Catalogo </h4>
    <div class="colonna">  
        <p> Abbigliamneto da tracking</p>
            <ul>
                <li> Cappelli</li>
                <li> Maglie </li>
                <li> Pantaloni </li>
                <li> Guanti </li>
                <li> Calze </li>
                <p> Vedi tutti </p>
           </ul>
        </div>
        <div class="colonna">
            <p> Equipaggiamento da trecking</p>
            <ul>
                <li> Zaini </li>
                <li> Occhiali </li>
                <li> Binocoli </li>
                <li> Bussola </li>
                <li> Orologi </li>
                <p> Vedi tutti </p>
           </ul>
        </div>
        <div class="colonna">
            <p> Attrezzatura da trecking</p>
            <ul>
                <li> Tende Trekking  </li>
                <li> Materassini </li>
                <li> Fornelli </li>
                <li> Pasti pronti </li>
                <li> Stoviglie </li>
                <li> Posate </li>
                <p> Vedi tutti </p>
           </ul>
        </div>

        
     <form action="cataologo.php">
            <button type="submit"> 
                Scopri il catalogo completo 
            </button>
        </section>
    

<!--
<div class="container2">
    <section>
        <h2> Offerta del giorno!</h2>
        <p> Non farti scappare questa offerta. <br> 
            Accedi e procedi con l'acquisto</p>
        <img src="zaino.jpg" alt="zaino">
    </section>
</div>
<hr>
<img src="./upload/mountains.png" alt="logo">
<div class="container3">
    <section>
        <h3> Articoli del momento!</h3>
        
        <?php foreach($templateParams["articolicasuali"] as $articolocasuale): ?>
            <div class="articolo">
            <img src="<?php echo UPLOAD_IMG.$articolocasuale["imgArticolo"]; ?>" alt="" /> <br>
            <a href="#"><?php echo $articolocasuale["nomeArticolo"]; ?></a>
            <p>€ <?php echo $articolocasuale["prezzo"]; ?></p>
            </div>
            <?php endforeach; ?>
        
       
    </section>
</div>
        <form action="cataologo.php">
            <button type="submit"> 
                Scopri il catalogo completo 
            </button>
        </form>
    </section>
</div>
<hr>
<img src="./upload/mountains.png" alt="logo">

        -->