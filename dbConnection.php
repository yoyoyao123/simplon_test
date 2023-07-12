<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';

// Ouvrir une nouvelle connexion au serveur MySQL
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
