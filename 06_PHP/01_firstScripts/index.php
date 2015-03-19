<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>
	<body>
		<?php
			$a = 112;
			var_dump($a); // valeur de la variable et son type
			echo gettype($a) . "<br /><br /><br />"; // type de variable

			# TABLEAU
			$myArray = array ();
			var_dump($myArray);
			echo "<br /><br /><br />";

			$myMovies = array ("Tarantino", "Pulp Fiction");
			$myMovies ["Fincher"] = "Fight Club";
			var_dump($myMovies);

		?>
	</body>
</html>
