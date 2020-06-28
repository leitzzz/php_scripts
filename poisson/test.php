<?php
// simple poisson calculation.
// extra info in spanish: https://www.inteapuestas.com/marcador-exacto.htm
include("classes/Poisson.php");

$poisson = new Poisson;

// for example if is a average of occurrence of 1.8 and we want to test the probability of occurs 1.
echo $poisson->calculate(1.8, 1);

?>