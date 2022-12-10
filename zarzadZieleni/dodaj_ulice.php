<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zarząd Zieleni</title>
</head>
<body>
	<?php
	$ulica = $_POST["ulica"];
	
	$polaczenie = new mysqli ("localhost", "root", "", "zarzad_zieleni_3b3_2");
	$polaczenie->query
	("INSERT INTO ulice(Ulica) VALUES ('$ulica')");
	$polaczenie->close();
	echo "Dodano:  $ulica <br/>";
	echo "<a href='index.html'> Dodaj kolejną ulicę </a>";
	?>
</body>
</html>