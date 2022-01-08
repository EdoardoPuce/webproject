<link rel="stylesheet" type="text/css" href="./css/dati-personali.css" />
<?php

if (isCliente()) {
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
        <p class="label">Nome: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["nome"]; ?></p>
        <p class="label">Cognome: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["cognome"]; ?></p>
    </div>
    <div>
        <p class="label">Email: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["email"]; ?></p>
    </div>
    <div>
        <p class="label"><?php echo $label.":" ?></p>
        <p class="value"> <?php echo $value ?></p>
        <p class="label">Città: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["citta"]; ?></p>
        </div>
        <div>
        <p class="label">Cap: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["cap"]; ?>
    </div>
    <div>
        <p class="label">Indirizzo: </p>
        <p class="value"><?php echo $templateParams['persona'][0]["indirizzo"]; ?></p>
        <p class="label">Civico:</p>
        <p class="value"><?php echo $templateParams['persona'][0]["civico"]; ?></p>
    </div>

</fieldset>