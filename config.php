<?php
$servername = "localhost";
$username = "root";
$password = "m";
$dbname = "mycoding";

// Création d'une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Utiliser la connexion pour exécuter des requêtes SQL

// ...

// Fermer la connexion
$conn->close();
?>
