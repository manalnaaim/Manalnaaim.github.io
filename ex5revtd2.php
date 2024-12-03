<?php
// Tableau associatif des pays et leurs populations
$pays = array(
    "France" => 73000000,
    "Allemagne" => 93000000,
    "Italie" => 70000000,
    "Espagne" => 50000000,
    "Portugal" => 10800000
);

// Trier le tableau par population en ordre décroissant
arsort($pays);

// Afficher les résultats
echo "<h3>Pays classés par population :</h3>";
foreach ($pays as $nom => $population) {
    echo "$nom : $population habitants<br>";
}
?>
