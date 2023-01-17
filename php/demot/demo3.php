<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo 3</title>
</head>

<body>
    <h1>Demo 3</h1>
    <h2>Erillinen käsittelijä</h2>
    <form action="demo3controller.php" method="POST">
        <label for="nimi">Syötä nimi</label><br><br>
        <input type="text" name="nimi" placeholder="Syötä puhelinnumero" />
        <input type="submit" value="Lähetä" name="btnsubmit" />
    </form>
    <h2>Käsittelijä samassa tiedostossa</h2>

    <form action="" method="POST">
        Anna palautetta, kiitos!<br><br>
        <textarea name="palaute" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Lähetä!">
        <input type="email" name="email" id="">
    </form>

    <?php
    if (isset($_POST["palaute"], $_POST["email"]) && strlen($_POST["palaute"]) > 0 && strlen($_POST["email"]) > 0) {
        $palaute = $_POST["palaute"];
        $sposti = $_POST["email"];
        echo "<p><i>$palaute</i></p>";
        echo "<p><i>Sähköpostini on $sposti</p></i>";
    } else {
        echo "Ei sähköpostia tai palautetta.";
    }
    ?>
</body>

</html>