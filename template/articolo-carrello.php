<link rel="stylesheet" type="text/css" href="./css/articolo-carrello.css" />
<?php for ( $i=0; $i < 5; $i++ ): ?>
<article>
    <header>
        <img src="./upload/packaging.png" alt="" />
        <h2>Articolo 1</h2>
    </header>
    <section>
        <p>Prezzo: 10$</p>
        <p>Quantita: 1</p>
        <div>
            <img src="./upload/add.png" alt="" />
            <img src="./upload/minus.png" alt="" />
        </div>
    </section>
</article>
<?php endfor ?>
