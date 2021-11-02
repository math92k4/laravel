<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forside</title>
</head>
<body>

<?php
    // Params definerer antallet af posts, evt sortering mm. (-1 betyder "alle").
    $params = array(
        'limit' => -1
    );
    // variabel som beholder af vores pods. Denne indeholder alle posts i pod'en "test".
    $forside = pods('test', $params);

    // while er ligesom forEach. Altså for hvert post i pods, gør sådan og sådan.
    while ( $forside->fetch() ) { ?>

         <!-- echo, er ligsom "innerHtml = pods.overskrift" -->
        <h1> <?php echo $forside->field('overskrift') ?> </h1>
        <h2> <?php echo $forside->field('underskrift') ?> </h2>

    <?php } ?>

</body>
</html>