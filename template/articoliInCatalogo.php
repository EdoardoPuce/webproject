<link rel="stylesheet" type="text/css" href="./css/catalogo.css" />


<?php foreach ($templateParams['articoli'] as $articolo): ?>
    
    <div class = "articolo">
        <img class ="prodotto" src= './upload/packaging.png'/>
        <p class = "prezzo"> <?php echo($articolo["prezzo"]) ?> </p>
        <p class = "nome"> <?php echo($articolo["nomeArticolo"]) ?> </p>
        <p class = "disponibilità"> disponibilità immediata </p>
    </div>
   
   
<?php endforeach; ?>