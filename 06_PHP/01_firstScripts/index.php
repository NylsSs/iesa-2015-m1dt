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
			echo "<br /><br /><br />";

			# FONCTION
			$a = 3;;
			$b = 4;;
			function somme() {
				global $a, $b;;
				$b = $a + $b;;
			}
			somme();;
			echo $b . "<br />";;
			
			// Refactoring de la fonction
			$c = 1;;
			$d = 2;;
			function somme2($e, $f) {
				return $e + $f;;
			}
			echo somme2($c, $d);;
		?>
	</body>
</html>
