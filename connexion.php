<?php
session_start();

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
$email = $_POST['email'];

// Vérification des informations de connexion
$sql = "SELECT * FROM utilisateurs WHERE username='$username' AND email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'utilisateur est authentifié
    // Vous pouvez effectuer des actions supplémentaires ici, comme rediriger vers une page de succès
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit(); // Terminer le script après la redirection
} else {
    // Les informations d'identification sont incorrectes
    // Vous pouvez effectuer des actions supplémentaires ici, comme afficher un message d'erreur
    echo "Nom d'utilisateur ou email incorrect.";
}

// Fermer la connexion
$conn->close();
?>
