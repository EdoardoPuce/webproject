<link rel="stylesheet" type="text/css" href="./css/dati-personali.css" />
<?php

    if(isCliente()){
        $label = "Paese";
        $value = $templateParams["persona"][0]['paese'];
    } else {
        $label = "P.iva";
        $value = $templateParams["persona"][0]['piva'];
    }

?>

<fieldset>
    <legend>Dati Personali</legend>
    <div>
        <p>Nome: <?php echo $templateParams['persona'][0]["nome"]; ?></p>
    </div>
    <div>
        <p>Cognome: <?php echo $templateParams['persona'][0]["cognome"]; ?></p>
    </div>
    <div>
        <p>Email: <?php echo $templateParams['persona'][0]["email"]; ?></p>
    </div>
    <div>
        <p><?php echo $label.": ".$value?></p>
    </div>
    <div>
        <p>Citta: <?php echo $templateParams['persona'][0]["citta"]; ?></p>
    </div>
    <div>
        <p>Indirizzo: <?php echo $templateParams['persona'][0]["indirizzo"]; ?></p>
    </div>
    <div>
        <p>Civico: <?php echo $templateParams['persona'][0]["civico"]; ?></p>
    </div>
    <div>
        <p>Cap: <?php echo $templateParams['persona'][0]["cap"]; ?><p>
    </div>
</fieldset>

