<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br><br>

        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $nom = htmlspecialchars($_POST['nom']);
        $age = (int) $_POST['age'];
        echo "<h2>Bienvenue, $nom, vous avez $age ans !</h2>";
    }
    ?>
</body>
</html>
