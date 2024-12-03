
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    echo "Nom : $nom <br>";
    echo "Email : $email <br>";
    
}

