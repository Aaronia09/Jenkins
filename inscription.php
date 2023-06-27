<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycoding";

// Création d'une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Vérifier si l'utilisateur existe déjà dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'utilisateur existe déjà, afficher un message d'erreur
    echo "Ce nom d'utilisateur est déjà pris. Veuillez en choisir un autre.";
} else {
    // Hasher le mot de passe avant de l'insérer dans la base de données
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Préparation de la requête SQL pour l'insertion des données
    $sql = "INSERT INTO utilisateurs (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

    // Exécution de la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}

// Fermer la connexion
$conn->close();
?>
