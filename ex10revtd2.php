<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type de compte</title>
</head>
<body>
    <h1>Choisissez votre type de compte</h1>
    <form method="POST" action="">
        <label for="type">Type de compte :</label>
        <select id="type" name="type" required>
            <option value="Administrateur">Administrateur</option>
            <option value="Utilisateur">Utilisateur</option>
        </select><br><br>
        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $type = htmlspecialchars($_POST['type']);

        if ($type === "Administrateur") {
            echo "<h2>Bienvenue, administrateur !</h2>";
        } else {
            echo "<h2>Bienvenue, utilisateur simple !</h2>";
        }
    }
    ?>
    
</body>
</html>
