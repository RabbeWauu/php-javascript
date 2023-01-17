<?php

if (isset($_POST["nimi"]) && strlen($_POST["nimi"]) > 0) {
    $nimi = $_POST["nimi"];
    echo "<h1>Nimi on $nimi</h1>";
} else {
    echo "<p>Ei nimeä.</p>";
}

?>