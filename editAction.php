<html>
	<head>
		<title>S'enregistrer</title>
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>
<body>
	<nav>
			<ul>
				<a href="index.php"> <img src="img\wallpp.png"></a>
				<li><a href="liste.php">Liste</a></li>
				<li><a class="active" href="add.php">Enregistrement</a></li>
				
			</ul>
	</nav>
</body>
<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Échapper aux caractères spéciaux d'une chaîne de caractères pour les utiliser dans une instruction SQL
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
	$num = mysqli_real_escape_string($mysqli, $_POST['num']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Vérifier les champs vides

		// Mise à jour de la table de la base de données
		$result = mysqli_query($mysqli, "UPDATE users SET `nom` = '$nom', `prenom` = '$prenom', `num` = '$num', `email` = '$email' WHERE `id` = $id");
		
		// Afficher le message de réussite
		echo "<center><p><font color='green' style='font-size: 20px;'>Mise à jour avec succès!</p></center>";
		echo "<center><a href='liste.php' style=' background-color: #49a14c;
		border: none;
		color: white;
		padding: 10px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 4px 2px;
		cursor: pointer;
		transition-duration: 0.4s;'>Voir Liste</a></center>";
	
}





