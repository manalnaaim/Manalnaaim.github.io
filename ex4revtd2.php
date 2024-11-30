<?php

$scores = array(
    "lina" => 15,
    "imran" => 14,
    "loubna" => 18.5,
    "samir" => 12,
    "aya" => 19
);


$moyenne = array_sum($scores) / count($scores);


echo "Moyenne des scores : $moyenne";
?>
