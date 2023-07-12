<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

// Obtenir la valeur du paramètre id à partir de l'URL
$id = $_GET['id'];

// Supprimer une ligne de la table de la base de données
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redirection vers la page d'affichage
header("Location:liste.php");
