<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set('Europe/Helsinki');

$t = date("H");

echo "Tänään on " . date("d.m.Y") . " klo " . date("H.i") . ".<br>";

if ($t > 20 and $t < 24) {
echo "Hyvää iltaa!";
} elseif ($t > 24 and $t < 06) {
echo "Hyvää yötä!";
} elseif ($t < 10 and $t > 06) {
echo "Hyvää huomenta!";
} elseif ($t > 10 and $t < 12) {
echo "Hyvää aamupäivää!";
} else {
echo "Hyvää iltapäivää!";
}
?>
 
</body>
</html>
