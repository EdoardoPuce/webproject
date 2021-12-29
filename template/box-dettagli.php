<link rel="stylesheet" type="text/css" href="./css/box-dettagli.css" />
<?php foreach($templateParams["ordini"] as $key=>$ordine): ?>
<article>
    <header>
        <img src="./upload/packaging.png" alt="" />
        <h3 for="nome">Ordine: <?php echo $key+1;?></h3>
    </header>
    <form>
        <input type="button" name="Dettagli" value="Dettagli" />
    </form>
</article>
<?php endforeach ?>
