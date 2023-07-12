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
	<div class="home">
		<h1>S'enregistrer</h1>
		<center>
			<form action="addAction.php" method="post" name="add">
				<table width="25%" border="0">
					<tr> 
						<td>Nom</td>
						<td><input type="text" name="nom" size="35"></td>
					</tr>
					<tr> 
						<td>Prenom</td>
						<td><input type="text" name="prenom" size="35"></td>
					</tr>
					<tr> 
						<td>Numero</td>
						<td><input type="text" name="num" size="35"></td>
					</tr>
					<tr> 
						<td>Email</td>
						<td><input type="text" name="email" size="35"></td>
					</tr>
					<tr> 
						<td></td>
						<td><input type="submit" name="submit" value="Ajouter" class="button3"></td>
					</tr>
				</table>
			</form>
		</center>
	</div>
</body>
</html>


