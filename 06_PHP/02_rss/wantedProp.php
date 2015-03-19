<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>PHP - RSS</title>
	</head>
	<body>
		<?php

			$newsRss1 = array(
							"title" => "Big Eyes", 
							"link" => "http://www.lesinrocks.com//cinema/films-a-l-affiche/big-eyes/",
							"pubDate" => "Tue, 17 Mar 2015 17:30:00 +0000",
							"author" => "Jean-Baptiste Morain",
							"description" => '<![CDATA[
<div><img src="http://www.lesinrocks.com/wp-content/thumbnails/uploads/2015/03/bigeyes604-tt-width-480-height-320-crop-1-bgcolor-000000.jpg" width="480" height="320" title="Big Eyes" alt="" /></div><div><p><small></small></p></div>Qu\'est-ce-qu\'une imposture artistique ? Burton détricote la question avec un mélange égal de malice et de tendresse.
]]>',
							"content" => '<![CDATA[
<div><img src="http://www.lesinrocks.com/wp-content/thumbnails/uploads/2015/03/bigeyes604-tt-width-480-height-320-crop-1-bgcolor-000000.jpg" width="480" height="320" title="Big Eyes" alt="" /></div><div><p><small></small></p></div><p><em>Big Fish</em> en 2003, <em>Big Eyes</em> aujourd’hui : le nouveau film de Tim Burton s’inscrit d’évidence dans sa veine réaliste, voire même biographique (il y fait à nouveau appel à Scott Alexander et Larry Karaszewski, les deux scénaristes d’<em>Ed Wood</em>, l’un de ses films les plus achevés).</p> <p><em> Big Eyes</em> raconte une histoire vraie, connue de tous les Américains. L’histoire de Walter Keane, un dessinateur qui connut une heure de gloire dans les années 50 et 60 avec ses posters hideux (sortes de poulbots ricains) représentant des enfants avec des yeux immenses (on en aperçoit parfois dans les films, par exemple dans la chambre d’un des enfants du héros de <em>A Serious Man</em> des frères Coen). Seulement, au début des années 80, son épouse Margaret lui intente un procès, qu’elle gagne, preuve à l’appui : elle est l’auteur des dessins, son mari a usurpé son identité artistique pendant trente ans. D’emblée, on se dit que c’est un sujet idéal pour Burton et on a raison.</p> <p>Car tout en se plaçant du côté de la victime d’un mari abusif, l’épouse trahie (Amy Adams), on sent très rapidement que ce personnage de raté magnifique qu’est Walter Keane (Christoph Waltz, très surprenant) a les faveurs de Burton, qu’il refuse au fond  de choisir entre la femme artiste sans talent et l’imposteur mythomane (qui rappelle évidemment le personnage du père de <em>Big Fish</em>, entre la dadame aux prétentions artistiques et le freak qui nous raconte des carabistouilles réjouissantes. Le film suggère même délicatement que, sans la personnalité vaguement charismatique de Keane, jamais les dessins de Margaret n’auraient remporté un tel succès… Au fond, qui est des deux le plus dans l’imposture ?</p> <p><strong>C’est bel et bien ce qui fait la réussite de <em>Big Eyes</em> : sa tendresse pour ses personnages, tous ses personnages</strong>. Son refus de juger leur comportement, sa générosité à la fois pour les spectateurs et pour les êtres humains. Tout comme dans <em>Ed Wood</em>, où le “plus mauvais cinéaste du monde” était mis sur un pied d’égalité avec Orson Welles (une icône du génie) parce que, bon ou mauvais cinéaste, ils font le même métier, avec la même passion, la même folie, le même enthousiasme, Burton le cinéaste refuse les échelles de valeurs bourgeoises. Tous les êtres humains n’ont pas le même talent, les mêmes aptitudes, la même intelligence, mais tous (acteurs ratés, vampires complètement déconnectés avec la réalité, superhéros  mal aimé de la société, monstres et extraterrestres effrayants en tous genres) doivent avoir leur chance.</p> <p>La morale burtonienne serait-elle naïve ? Non, car elle continue à aller contre l’idée de réussite sociale, contre les conventions des classes moyennes, et contre l’ennui. Burton s’est toujours placé du côté des marginaux, sans doute parce qu’il se sentait ainsi enfant et adolescent. Et il suffisait de regarder les files d’attente, mêlant toutes les générations, devant la Cinémathèque française, il y a  deux ans, venus voir l’exposition Tim Burton, pour s’en faire une idée : le public lui est reconnaissant de ce qu’il lui apporte. Il a bien raison : le cinéma de Burton est un cinéma bon mais jamais niais, drôle, humaniste et courageux.  <em>Big Eyes</em> le prouve une fois de plus.</p>
]]>');;

			$wantedProperties = array("title", "pubDate");;

			function buildThead($wantedProperties) {
				$html = "<thead></thead>";;
				
				return $html;;
			}
			function buildRow($news, $wantedProperties) {
				$html = "<tr>";;
				foreach ($wantedProperties as $property) {
					$html .= "<td valign='top'>" . $news[$property] . "</td>";;
				}
				$html .= "</tr>";;
				return $html;;
			}
			function buildTable($news, $wantedProperties) {
				$html = "<table>" . buildThead($news, $wantedProperties) . buildRow($news, $wantedProperties) . "</table>";;
				return $html;;
			}
			echo buildTable($newsRss1 ,$wantedProperties);;

		?>
	</body>
</html>