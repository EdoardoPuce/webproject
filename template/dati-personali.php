<link rel="stylesheet" type="text/css" href="./css/dati-personali.css" />
<?php

    $test = $templateParams['persona'][0]["piva"];
    if (isset($test)){
        $res = "okok";
        $ris = "P.iva";
    }
    $lol = $templateParams['persona'][0]["paese"];
    if (isset($lol)){
        $res = "alee";
        $ris = "Paese";
    }
?>

<fieldset>
    <legend>Dati Personali</legend>
    <div>
        <label for="nome">Nome:</label><input type="text" id="nome" name="nome" value="<?php echo $templateParams['persona'][0]["nome"]; ?>" />
    </div>
    <div>
        <label for="cognome">Cognome:</label><input type="text" id="cognome" name="cognome" value="<?php echo $templateParams['persona'][0]["cognome"]; ?>" />
    </div>
    <div>
        <label for="email">Email:</label><input type="email" id="email" name="email" value="<?php echo $templateParams['persona'][0]["email"]; ?>" />
    </div>
    <div>
        <label for="paese_iva"><?php echo $ris; ?>:</label><input type="text" id="paese_iva" name="paese_iva"  value="<?php echo $res; ?>"/>
    </div>
    <div>
        <label for="citta">Citta:</label><input type="text" id="citta" name="citta" value="<?php echo $templateParams['persona'][0]["citta"]; ?>" />
    </div>
    <div>
        <label for="indirizzo">Indirizzo:</label><input type="text" id="indirizzo" name="indirizzo" value="<?php echo $templateParams['persona'][0]["indirizzo"]; ?>" />
    </div>
    <div>
        <label for="civico">Civico:</label><input type="number" id="civico" name="civico" value="<?php echo $templateParams['persona'][0]["civico"]; ?>" />
    </div>
    <div>
        <label for="cap">Cap:</label><input type="number" id="cap" name="cap" value="<?php echo $templateParams['persona'][0]["cap"]; ?>" />
    </div>
</fieldset>

