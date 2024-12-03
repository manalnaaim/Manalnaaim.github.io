<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme de deux nombres</title>
</head>
<body>
    <h1>Calculez la somme de deux nombres</h1>
    <form method="GET" action="">
        <label for="num1">Nombre 1 :</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Nombre 2 :</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <button type="submit">Calculer</button>
    </form>

    <?php
    
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $somme = $num1 + $num2;

        echo "<h2>La somme de $num1 et $num2 est : $somme</h2>";
    }
    ?>
</body>
</html>
