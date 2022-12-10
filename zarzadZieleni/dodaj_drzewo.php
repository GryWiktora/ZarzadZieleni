<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zarząd Zieleni</title>
</head>
<body>
	<?php
	$gatunek = $_POST["gatunek"];
	$rodzaj = $_POST["rodzaj"];
	$polaczenie = new mysqli ("localhost", "root", "", "zarzad_zieleni_3b3_2");
	$polaczenie->query
	("INSERT INTO drzewa(Gatunek, Rodzaj) VALUES ('$gatunek', '$rodzaj')");
	$polaczenie->close();
	echo "Dodano $gatunek $rodzaj <br/>";
	echo "<a href='index.html'> Dodaj kolejne drzewo </a>";
	?>
</body>
</html>