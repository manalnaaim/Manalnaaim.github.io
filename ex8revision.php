<?php
// Tableau des produits
$produits = array(
    "Produit 1" => 15,
    "Produit 2" => 73,
    "Produit 3" => 24,
    "Produit 4" => 50
);

// Si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produitsSelectionnes = $_POST['produits'] ?? []; // Produits cochés
    $prixTotal = 0; // Initialisation du prix total

    echo "<h2>Produits sélectionnés :</h2>";
    if (!empty($produitsSelectionnes)) {
        echo "<ul>";
        foreach ($produitsSelectionnes as $produit) {
            echo "<li>$produit - " . $produits[$produit] . " €</li>";
            $prixTotal += $produits[$produit];
        }
        echo "</ul>";
        echo "<p><strong>Prix total :</strong> $prixTotal €</p>";
    } else {
        echo "<p>Aucun produit sélectionné.</p>";
    }
    echo "<a href='index.php'>Retour</a>";
    exit; // Stoppe l'exécution après avoir affiché les résultats
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection de Produits</title>
</head>
<body>
    <h1>Sélectionnez vos produits</h1>
    <form method="POST" action="">
        <?php
        // Génération des cases à cocher pour chaque produit
        foreach ($produits as $nom => $prix) {
            echo "<label>";
            echo "<input type='checkbox' name='produits[]' value='$nom'> $nom - $prix €";
            echo "</label><br>";
        }
        ?>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
