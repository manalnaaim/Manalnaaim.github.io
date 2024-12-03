<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec validation</title>
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
        $age = $_POST['age'];

        if (!filter_var($age, FILTER_VALIDATE_INT) || $age <= 0) {
            echo "<p style='color: red;'>Erreur : L'âge doit être un entier supérieur à 0.</p>";
        } else {
            echo "<h2>Bienvenue, $nom, vous avez $age ans !</h2>";
        }
    }
    ?>
</body>
</html>
