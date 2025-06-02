<?php
include ('gos.php');
include ('gat.php');



$gos1= new gos (nom: "Bobby");
echo $gos1->makesound() . "\n";
$gat1 = new gat("Misifu");
echo $gat1->makesound();


?>