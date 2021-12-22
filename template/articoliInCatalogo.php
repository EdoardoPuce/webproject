<link rel="stylesheet" type="text/css" href="./css/catalogo.css" />

<section>
    <form class="rierca">
        <input type = "image" src ="./upload/search.png" alt = "Submit" />
        <input type = "text" name = "ricerca" placeholder="Ricerca..."/>
       

    </form>
    <input type="button" value="Filtra"  />
    
</section>


<section>
<?php foreach ($templateParams['articoli'] as $articolo) : ?>
    
    <?php $qta = $articolo["qtaMagazzino"];
            if ($qta > 5) {
                $disponibilità = "Disponibile";
            } else if ($qta > 0 && $qta <= 5) {
                $disponibilità = "Ultimi pezzi";
            } else {
                $disponibilità = "Non disponibile";
            } ?> 
    
    <div class="articolo">
        <img class="prodotto" src='<?php echo UPLOAD_IMG.$articolo["imgArticolo"];?>' alt ="" />
        <p class="prezzo">€ <?php echo ($articolo["prezzo"]) ?> </p>
        <p class="nome"> <?php echo ($articolo["nomeArticolo"]) ?> </p>
        
        <p class="disponibilità" value="<?php echo $disponibilità?>"> <?php echo $disponibilità?>
            </p>
    </div>

<?php endforeach;?>
</section>
