<!DOCTYPE html>
<html lang="en"> <!--1.3-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Demo 1</title>
</head>
<body>
  <h1>PHP Demo 1</h1>
  <h2>1.1</h2>
  <?php
  echo "Hello world!";
  ?>
  <h2>1.2</h2>
  <?php
  echo "<h1>Hello world!</h1>";
  ?>
  <h2>1.4 ja 1.5</h2> 
  <?php
  echo '<p>"Kun hyppäät ilosta ilmaan, <br> varo, <br> ettei kukaan vedä maata jalkojesi alta" (Stanislaw Jerzy Lec)</p>';
  ?>
  <h2>1.6</h2>
  <?php
    $omanimi = 'Rasmus'; 
    echo "Kirjoittajan nimi on $omanimi";
  ?>
  <h2>1.7</h2>
  <?php
  $luku1 = 10;
  $summa = $luku1 + $luku1;
  $erotus = $luku1 - $luku1;
  $tulo = $luku1 * $luku1;
  echo "Luvun $luku1 summa on $summa <br> \n";
  echo "Luvun $luku1 erotus on $erotus <br> \n";
  echo "Luvun $luku1 tulo on $tulo <br> \n";
  ?>
</body>
</html>