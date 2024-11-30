
<?php

// Tableau associatif des villes et leurs températures
$villes = array(
    "Paris" => 12,
    "Londres" => 15,
    "New York" => 18,
    "Tokyo" => 20,
    "Berlin" => 14
);

// Trouver la ville avec la température la plus élevée

$max_temp = max($villes);
$ville_max_temp = array_search($max_temp, $villes);

echo "<h2>Villes et leurs températures :</h2>";
foreach ($villes as $ville => $temp) 
{
    echo "<p>$ville : $temp °C</p>";
}

echo "<h3>La ville avec la température la plus élevée est : $ville_max_temp avec $max_temp °C</h3>";


