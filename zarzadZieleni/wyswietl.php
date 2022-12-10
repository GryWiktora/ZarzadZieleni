<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zarząd Zieleni</title>
</head>
<body>
	<?php
	$lista = $_POST["lista"];
	$polaczenie = new mysqli ("localhost", "root", "", "zarzad_zieleni_3b3_2");
	if ($lista == "drzewa")
		{
		$wyswietl = $polaczenie->query ("SELECT Gatunek, Rodzaj FROM drzewa");
		while ($wiersz = $wyswietl->fetch_array())
			{
				echo "Gatunek: ".$wiersz["Gatunek"]." Rodzaj: ".$wiersz["Rodzaj"]."</br>";
			}
		}
	if ($lista == "ulice")
		{
		$wyswietl = $polaczenie->query ("SELECT Ulica FROM ulice");
		while ($wiersz = $wyswietl->fetch_array())
			{
				echo "Ulica: ".$wiersz["Ulica"]."</br>";
			}
		}
	$polaczenie->close();
	echo "<a href='index.html'> wróć do strony głównej </a>";
	?>
</body>
</html>