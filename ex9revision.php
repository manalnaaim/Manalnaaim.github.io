<?php

// Tableau associatif imbriqué pour les étudiants et leurs notes
$etudiants = array(
    "emma" => array("Math" => 15, "Anglais" => 14, "Informatique" => 16),
    "rose" => array("Math" => 10, "Anglais" => 12, "Informatique" => 14),
    "lina" => array("Math" => 18, "Anglais" => 17, "Informatique" => 19)
);

echo "<h1>Résultats des étudiants</h1>";

foreach ($etudiants as $nom => $notes) {
    $somme = array_sum($notes); // Somme des notes
    $nb_matieres = count($notes); // Nombre de matières
    $moyenne = $somme / $nb_matieres; // Calcul de la moyenne

    echo "<h2>$nom</h2>";
    echo "<ul>";
    foreach ($notes as $matiere => $note) {
        echo "<li>$matiere : $note</li>";
    }
    
    echo "</ul>";
    echo "<p>Moyenne : $moyenne</p>";

}

