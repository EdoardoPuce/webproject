<link rel="stylesheet" type="text/css" href="./css/catalogo.css" />


<?php foreach ($templateParams['articoli'] as $articolo) : ?>
    
    <?php $qta = $articolo["qtaMagazzino"];
            if ($qta > 5) {
                $risultato = "Disponibile";
            } else if ($qta > 0 && $qta <= 5) {
                $risultato = "Ultimi pezzi";
            } else {
                $risultato = "Non disponibile";
            } ?> 
    
    <div class="articolo">
        <img class="prodotto" src='./upload/packaging.png' />
        <p class="prezzo">€ <?php echo ($articolo["prezzo"]) ?> </p>
        <p class="nome"> <?php echo ($articolo["nomeArticolo"]) ?> </p>
        
        <p class="disponibilità" value="<?php echo $risultato?>">Disponibilita: <?php echo $risultato?>
            </p>
    </div>


<?php endforeach;
