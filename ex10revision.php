<?php
session_start();


if (!isset($_SESSION['utilisateurs'])) {
    $_SESSION['utilisateurs'] = array(
        1 => array("nom" => "rita", "email" => "rita@example.com"),
        2 => array("nom" => "imane", "email" => "imane@example.com")
    );
}


if (isset($_POST['ajouter'])) {
    $id = count($_SESSION['utilisateurs']) + 1;
    $_SESSION['utilisateurs'][$id] = array(
        "nom" => htmlspecialchars($_POST['nom']),
        "email" => htmlspecialchars($_POST['email'])
    );
}


if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $_SESSION['utilisateurs'][$id] = array(
        "nom" => htmlspecialchars($_POST['nom']),
        "email" => htmlspecialchars($_POST['email'])
    );
}


if (isset($_POST['supprimer'])) {
    $id = $_POST['id'];
    unset($_SESSION['utilisateurs'][$id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
</head>
<body>
    <h1>Gestion des Utilisateurs</h1>

    
    <h2>Ajouter un utilisateur</h2>
    <form method="POST" action="">
        <label>Nom :</label>
        <input type="text" name="nom" required>
        <label>Email :</label>
        <input type="email" name="email" required>
        <button type="submit" name="ajouter">Ajouter</button>
    </form>

   
    <h2>Liste des utilisateurs</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($_SESSION['utilisateurs'] as $id => $utilisateur): ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $utilisateur['nom'] ?></td>
                <td><?= $utilisateur['email'] ?></td>
                <td>
                    
                    <form method="POST" action="" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="text" name="nom" value="<?= $utilisateur['nom'] ?>" required>
                        <input type="email" name="email" value="<?= $utilisateur['email'] ?>" required>
                        <button type="submit" name="modifier">Modifier</button>
                    </form>

                   
                    <form method="POST" action="" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit" name="supprimer">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
