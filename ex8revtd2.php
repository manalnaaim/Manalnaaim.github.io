<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couleur préférée</title>
</head>
<body>
    <h1>Choisissez votre couleur préférée</h1>
    <form method="POST" action="">
        <label for="couleur">Couleur :</label>
        <select id="couleur" name="couleur" required>
            <option value="Rouge">Rouge</option>
            <option value="Vert">Vert</option>
            <option value="Bleu">Bleu</option>
        </select><br><br>
        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $couleur = htmlspecialchars($_POST['couleur']);
        echo "<h2>Votre couleur préférée est : $couleur</h2>";
    }
    ?>
</body>
</html>
