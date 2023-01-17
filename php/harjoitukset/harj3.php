<head>
    <title>Harjoitus 3 PHP</title>
</head>
<html>

<body>
    <h1>Harjoitus 3.1</h1>
    <form action="" method="POST">
        <label for="raha">Anna rahamäärä</label><br>
        <input type="text" name="raha" id="raha" placeholder="Esim. 128.50€"><br>
        <label for="hinta">Anna bensan hinta</label><br>
        <input type="text" name="hinta" id="hinta" placeholder="Esim. 1.80€">
        <input type="submit" value="Laske tulos">
    </form>

    <?php
    if (isset($_POST["raha"], $_POST["hinta"])) {
        $rahamaara = (float)$_POST["raha"];
        $bensahinta = (float)$_POST["hinta"];
        echo round($rahamaara / $bensahinta, 2) . " litraa";
    }
    ?>
    <h1>Harjoitus 3.2</h1>
    <form action="" method="POST">
        <label for="rahamaara">Asiakkaan antama rahamäärä</label><br>
        <input type="text" name="rahamaara" id="" placeholder="Esim. 400€"><br>
        <label for="ostossumma">Ostosten loppusumma</label><br>
        <input type="text" name="ostossumma" id="" placeholder="Esim. 150€"><br><br>
        <input type="submit" value="Laske paljonko asiakas saa takaisin">
    </form>
    <?php
    if (isset($_POST["rahamaara"], $_POST["ostossumma"])) {
        $rahamaara = (float) $_POST["rahamaara"];
        $ostossumma = (float) $_POST["ostossumma"];
        echo "Asiakas saa takaisin " . round($rahamaara - $ostossumma, 2) . " euroa.";
    }
    ?>

    <h1>Harjoitus 3.3</h1>
    <form action="" method="POST">
        <label for="verohinta">Anna tuotteen verollinen hinta</label><br>
        <input type="text" name="verohinta" id="" placeholder="esim. 72.80€"><br>
        <label for="ALV">ALV%</label><br>
        <input type="text" name="ALV" id="" placeholder="24">
        <input type="submit" value="Laske vero">
    </form>
    <?php
    if (isset($_POST["verohinta"], $_POST["ALV"])) {
        $verohinta = (float)$_POST["verohinta"];
        $ALV = (float) $_POST["ALV"];
        echo "Arvonlisävero hinnasta " . $verohinta . " euroa on " . round($ALV * $verohinta / (100 + $ALV), 2) . " euroa. <br>";
        echo "Veroton hinta on " . round($verohinta * 100 / (100 + $ALV), 2) . " euroa.";
    }
    ?>
    <h1>Harjoitus 3.4</h1>
    <form action="" method="POST">
        <label for="luku">Anna luku väliltä 1-10</label><br><br>
        <input type="number" name="luku" id="" placeholder="Luku väliltä 1-10" min="0" max="10">
        <input type="submit" value="Arvo">
    </form>
    <?php
    if (isset($_POST["luku"])) {
        $kayttajanluku = $_POST["luku"];
        $rand = rand(1,10);
        if ($kayttajanluku == $rand) {
            echo "Onnittelut!";
        } elseif (strlen($kayttajanluku) === 0) {
            echo "Ei saatu lukua";
        } else {
            echo "Tällä kertaa ei onnannut. <br>";
            echo "Syöttämäsi luku oli $kayttajanluku ja arvottu luku oli $rand";
        }
    }
    ?>
    <h1>Harjoitus 3.5</h1>
</body>

</html>