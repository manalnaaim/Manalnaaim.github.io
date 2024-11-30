<?php
   
    session_start();

    if (!isset($_SESSION['commentaires'])) 
    {
        $_SESSION['commentaires'] = array();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pseudo = htmlspecialchars($_POST['pseudo']); 
        $commentaire = htmlspecialchars($_POST['commentaire']); 
        $horodatage = date('Y-m-d H:i:s'); 

        $_SESSION['commentaires'][] = array(
            'pseudo' => $pseudo,
            'commentaire' => $commentaire,
            'date' => $horodatage
        );

    }


    if (!empty($_SESSION['commentaires'])) {
        foreach ($_SESSION['commentaires'] as $com) {
            echo "<p><strong>{$com['pseudo']}</strong> ({$com['date']}) :</p>";
            echo "<p>{$com['commentaire']}</p><hr>";
        }
    }
     else {
        echo "<p>Aucun commentaire pour l'instant.</p>";
    }

    