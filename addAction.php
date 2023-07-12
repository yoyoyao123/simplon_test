<html>
<head>
	<title>Ajouter</title>
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

	<br><br><br><br>
<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Échapper aux caractères spéciaux dans une chaîne de caractères pour les utiliser dans une instruction SQL	
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
	$num = mysqli_real_escape_string($mysqli, $_POST['num']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Vérifier les champs vides
	if (empty($nom) || empty($prenom) || empty($num) || empty($email)) {
		if (empty($nom)) {
			echo "<center><font color='red' style='font-size: 20px;'>Le champs Nom est vide, appuyez sur retour et remplissez le champs manquant.</font><br/></center>";
		}

		if (empty($prenom)) {
			echo "<center><font color='red' style='font-size: 20px;'>Le champs Prenom est vide, appuyez sur retour et remplissez le champs manquant.</font><br/></center>";
		}
		
		if (empty($num)) {
			echo "<center><font color='red' style='font-size: 20px;'>Le champs Numero est vide, appuyez sur retour et remplissez le champs manquant.</font><br/></center>";
		}
		
		if (empty($email)) {
			echo "<center><font color='red' style='font-size: 20px;'>Le champs Email est vide, appuyez sur retour et remplissez le champs manquant.</font><br/></center>";
		}
		
		// Afficher le lien vers la page précédente
		echo "<center><br/><a href='javascript:self.history.back();' style=' background-color: #49a14c;
		border: none;
		color: white;
		padding: 10px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 4px 2px;
		cursor: pointer;
		transition-duration: 0.4s;'>Retour</a> </center>";
	} else { 
		// Si tous les champs sont remplis (non vides) 

		// Insérer des données dans la base de données
		$result = mysqli_query($mysqli, "INSERT INTO users (`nom`, `prenom`, `num`, `email`) VALUES ('$nom', '$prenom', '$num', '$email')");
		
		// Afficher le message de réussite
		echo "<center><p><font color='green' style='font-size: 20px;'>Participant a bien été enregistrer!</p></center>";
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
		transition-duration: 0.4s;'>Voir la liste</a></center>";
	}
}
?>
</body>
</html>
