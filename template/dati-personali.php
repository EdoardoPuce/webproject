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
        <label for="nome">Nome: <?php echo $templateParams['persona'][0]["nome"]; ?></label>
    </div>
    <div>
        <label for="cognome">Cognome: <?php echo $templateParams['persona'][0]["cognome"]; ?></label>
    </div>
    <div>
        <label for="email">Email: <?php echo $templateParams['persona'][0]["email"]; ?></label>
    </div>
    <div>
        <label for="paese_iva"><?php echo $label.": ".$value?></label>
    </div>
    <div>
        <label for="citta">Citta: <?php echo $templateParams['persona'][0]["citta"]; ?></label>
    </div>
    <div>
        <label for="indirizzo">Indirizzo: <?php echo $templateParams['persona'][0]["indirizzo"]; ?></label>
    </div>
    <div>
        <label for="civico">Civico: <?php echo $templateParams['persona'][0]["civico"]; ?></label>
    </div>
    <div>
        <label for="cap">Cap: <?php echo $templateParams['persona'][0]["cap"]; ?></label>
    </div>
</fieldset>

