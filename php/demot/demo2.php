<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo 2</title>
</head>

<body>
    <?php
    $luku1 = 0;
    $luku2 = "-2";
    $luku3 = -1;
    $luku4 = 1;
    $luku5 = 100;


    // jos $luku1 on nolla, tulosta "nolla"
    if ($luku1 == 0) {
        echo "nolla <br>";
    }
    // jos $luku2 on nolla, tulosta "nolla"
    if ($luku2 == 0) {
        echo "nolla <br>";
    }
    // jos $luku2 on pienempi kuin $luku 4, tulosta "luku 2 on pienempi", muuten tulosta "luku 2 ei ole pienempi"
    if ($luku2 < $luku4) {
        echo "luku 2 on pienempi <br>";
    } else {
        echo "luku 2 ei ole pienempi <br>";
    }
    // jos $luku4 on $luku1:n ja $luku5:n välissä, tulosta "välissä"
    if ($luku4 < $luku5 and $luku4 > $luku1) {
        echo "välissä <br>";
    }
    // jos $luku4 on pienempi kuin $luku1 tai suurempi kuin $luku5, tulosta "reunassa", muuten tulosta "ok"
    if ($luku4 < $luku1 or $luku4 > $luku5) {
        echo "reunassa <br>";
    } else {
        echo "ok <br>";
    }
    // tutki funktiolla var_dump muuttujien $luku1 ja $luku2 arvot
    var_dump($luku1, $luku2)
        // $luku2 muuttuja on merkkijono, mutta if else rakenne silti laskee oikein (if $luku2 < $luku4). (Ei edes laske merkkijonon pituutta!)
    

        ?>
</body>

</html>