<?php
// Inclure le fichier de connexion à la base de données
require_once("dbConnection.php");

// Récupérer les données dans l'ordre décroissant (la dernière entrée en premier)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Liste Participants</title>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
	<nav>
		<ul>
			<a href="index.php"> <img src="img\wallpp.png"></a>
			<li><a class="active" href="liste.php">Liste</a></li>
			<li><a  href="add.php">Enregistrement</a></li>
			
		</ul>
	</nav>


	<div class="home">
	<h1>Liste Des Participants</h1>
	<table width='80%' border=0 align="center" class="tab1">
		<tr bgcolor='#DDDDDD' >
			<td><strong>Nom</strong></td>
			<td><strong>Prenom</strong></td>
			<td><strong>Numero</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Récupérer la ligne suivante d'un ensemble de résultats sous la forme d'un tableau associatif
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nom']."</td>";
			echo "<td>".$res['prenom']."</td>";
			echo "<td>".$res['num']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\" class=\"button1\" >Modifier</a> | 
			<a href=\"delete.php?id=$res[id]\" class=\"button2\" onClick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">Supprimer</a></td>";
		}
		?>
	</table>
	</div>
</body>
</html>
