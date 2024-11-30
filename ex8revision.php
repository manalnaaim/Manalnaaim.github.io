<?php

 $produits = array(
    "Produit 1" => 15,
    "Produit 2" => 73,
    "Produit 3" => 24,
    "Produit 4" => 50
);

foreach ($produits as $nom => $prix) 
{
    echo "<input type='checkbox' name='produits[]' value='$nom'> $nom - $prix €<br>";
}


    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produits'])) {
        $selection = $_POST['produits'];
        $total = 0;

        echo "<h2>Produits sélectionnés :</h2>";
        foreach ($selection as $produit) {
            $prix = $produits[$produit];
            $total += $prix;
            echo "<p>$produit - $prix €</p>";
        }

        echo "<h3>Prix total : $total €</h3>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p>Vous n'avez sélectionné aucun produit.</p>";
    }
  