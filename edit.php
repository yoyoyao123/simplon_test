<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

// Obtenir l'identifiant d'un paramètre d'URL
$id = $_GET['id'];

// Sélectionner les données associées à cet identifiant particulier
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Récupérer la ligne suivante d'un ensemble de résultats sous la forme d'un tableau associatif
$resultData = mysqli_fetch_assoc($result);

$nom = $resultData['nom'];
$prenom = $resultData['prenom'];
$num = $resultData['num'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Modifier</title>
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
    
	<center>
		<h1>Modifier</h1>
		<form name="edit" method="post" action="editAction.php">
			<table border="0">
				<tr> 
					<td>Nom</td>
					<td><input type="text" name="nom" value="<?php echo $nom; ?>" size="35"></td>
				</tr>
				<tr> 
					<td>Prenom</td>
					<td><input type="text" name="prenom" value="<?php echo $prenom; ?>" size="35"></td>
				</tr>
				<tr> 
					<td>Numero</td>
					<td><input type="text" name="num" value="<?php echo $num; ?>" size="35"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $email; ?>" size="35"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
					<td><input type="submit" name="update" value="Actualiser" class="button3"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
