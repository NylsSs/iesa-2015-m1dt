<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>
	<body>
		<?php
			$a = "Bonjour";
			$$a = "Monde";
			
			echo $a . "<br />";
			echo $$a . "<br />";
			echo ${$a} . "<br />";
			echo $Bonjour . "<br />";
		?>
	</body>
</html>
