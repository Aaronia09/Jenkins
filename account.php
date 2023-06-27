<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_id'])) {
    die('Utilisateur non authentifié');
}

// Récupérer l'ID de l'utilisateur authentifié
$user_id = $_SESSION['user_id'];

// Établir la connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'mycoding');

// Vérifier les erreurs de connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Préparer la requête pour récupérer les informations de l'utilisateur
$query = "SELECT * FROM utilisateurs WHERE id = $user_id";

// Exécuter la requête
$result = $mysqli->query($query);

// Vérifier si la requête a réussi
if (!$result) {
    die('Erreur de requête : ' . $mysqli->error);
}

// Récupérer les informations de l'utilisateur
$user = $result->fetch_assoc();

// Vérifier si l'utilisateur existe
if (!$user) {
    die('Utilisateur non trouvé');
}

// Vérifier si le nom d'utilisateur correspond à celui de la base de données
if ($user['username'] === 'valeur_conforme') {
    $showForm = true;
} else {
    $showForm = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
</head>
<body>
    <h1>Informations de l'utilisateur</h1>
    <p><strong>Nom d'utilisateur:</strong> <?php echo $user['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <!-- Afficher d'autres informations de l'utilisateur ici -->

    <?php if ($showForm) { ?>
        <form action="modifiercompte.php" method="POST">
            <!-- Ajouter les champs du formulaire ici -->
            <input type="submit" value="Modifier mon compte">
        </form>
    <?php } else { ?>
        <p>Vous n'êtes pas autorisé à modifier votre compte.</p>
    <?php } ?>
</body>
</html>
