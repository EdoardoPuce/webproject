<link rel="stylesheet" type="text/css" href="./css/box-dettagli.css" />
<?php if($templateParams["pg"] == 3): ?>
    <?php  foreach($templateParams["articoli"] as $ordine): ?>
    <article>
        <header>
            <img src="<?php echo './upload/imgArticoli/'.$ordine[0]['imgArticolo'];?>" alt="" />
            <h3 for="nome"><?php echo $ordine[0]['nomeArticolo'];?></h3>
        </header>
        <a class="link" href="articolo.php?idArticolo=<?php echo $ordine[0]['idArticolo']; ?>">Dettagli</a>
    </article>
    <?php endforeach ?>
<?php endif ?>


<?php if($templateParams["pg"] == 2 && isCliente()): ?>
    <?php foreach($templateParams["ordini"] as $key=>$ordine): ?>
        
    <article>
        <header>
            <img src="./upload/packaging.png" alt="" />
            <h3 for="nome">Ordine: <?php echo $key+1;?></h3>
        </header>
        <a class="link" href="account.php?pg=3&idO=<?php echo $key+1; ?>">Dettagli</a>
    </article>
    <?php endforeach ?>
<?php endif ?>


<?php if($templateParams["pg"] == 2 && !isCliente() ): ?>

    <div class="crea">
        <a href="account.php?pg=4">Crea Articolo</a>
    </div>
    <?php foreach($templateParams["articoli"] as $articolo): ?>
  
    <article>
        <header>
            <img src="<?php echo './upload/imgArticoli/'.$articolo['imgArticolo'];?>" alt="" />
            <h3 for="nome"><?php echo $articolo['nomeArticolo'];?></h3>
        </header>
        <a class="link" href="account.php?pg=4&idA=<?php echo $articolo['idArticolo'];?>">Dettagli</a>
    </article>
    <?php endforeach ?>

<?php endif ?>