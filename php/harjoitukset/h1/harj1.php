<html>
    <body>
        <h1>Harjoitus 1</h1>
        <h2>1.1</h2>
        <?php
        
        echo "<h3>Stanislaw Jerzy Lecin aforismeja</h3>";
        echo "<p>Kukaan ei ole niin tyhmä, ettei silloin tällöin heittäydy tyhmäksi.</p>";
        echo "<p>Aina löytää eskimoita, jotka ovat valmiita neuvomaan kongolaisille, miten parhaiten selvitään helteellä. </p>";
        echo "<p>Mieti ennen kuin ajattelet.</p>";
        ?>
        <hr>
        <h2>1.2</h2>
        <?php
        $aidinika = 30;
        $isanika = 34;
        $lapsenika = 4;
        echo "Kaikkien iät yhteen laskettuna on " . $aidinika + $isanika + $lapsenika . "<br>";
        echo "Äidin ikä, kun hän sai lapsen oli " . $aidinika - $lapsenika . "<br>";
        echo "Isän syntymävuosi on " . 2023 - $isanika . "<br>";
        ?>
        <hr>
        <h2>1.3 vakio</h2>
        <?php
        define("ALV", 0.24);
        echo "Arvonlisävero 10€ eurosta on " . 10 * ALV . "€.<br>";
        echo "Arvonlisävero 20€ eurosta on " . 20 * ALV . "€.<br>";
        echo "Arvonlisävero 35,5€ eurosta on " . 35.5 * ALV . "€.<br>";
        echo "Arvonlisävero 1.80€ eurosta on " . 1.80 * ALV . "€.<br>";
        ?>
        <hr>
        <h2>1.4 rand</h2>
        <?php
        echo ("Arpajaiset <br>");
        echo("Voittajanumero on " . rand(1,1000) . "! Lataa sivu uudelleen arpoaksesi uudelleen.")
        ?>
        <hr>
        <h2>1.5 Pyöristykset</h2>
        <?php
        echo "Luvun 1.5 pyöristys alaspäin kokonaisluvuksi on " . floor(1.50) . "<br>";
        echo "Luvun 1.456 pyöristäminen ylöspäin kahden desimaalin tarkkuudella on " . round(1.456,2) . "<br>";
        echo "Luvun 68995 kymmenien tarkkuudella on " . round(68995, -1) . "<br>";
        echo "Luvun 124.558 satojen tarkkudella on " . round(124.558, -2) . "<br>";
        echo "Luvun 3.14 ylöspäin kokonaisluvuksi on " . ceil(3.14) . "<br>";
        ?>
    </body>
</html>