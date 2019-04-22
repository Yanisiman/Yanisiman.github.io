<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../images/icon.png" />
	<link rel="stylesheet" href="../../css/site.css"/>
	<link rel="stylesheet" href="../../css/problemes.css"/>
	<title>FIG - Problèmes</title>
</head>
<body>

	<?php include("header.php"); ?>

	<div class="content">
	<header>
		<h1>Problèmes et Solutions</h1>
		<hr/>
	</header>
	
	<table id="tab_prob">
	<tr class="prob">
	<td><h2>Problèmes rencontrés</h2></td>
	<td><h2>Solutions envisagées</h2></td>
	</tr>
	<tr class="prob">
		<td>L’utilisation de git en équipe : Nous avions tous été formé à git à travers nos nombreux TPs de programmation mais l’utilisation de git en équipe de plusieurs personnes est évidemment différente. Il a donc fallu faire des branches pour que chacun puisse travailler sur les différentes parties qui lui incombaient. Cependant il fallait très souvent gérer les nombreux conflits lorsque l’on voulait merge (faire une mise en commun dans la branche principale). Ces nombreux conflits étant relatifs à de petites différences lorsque l’on travaillait sur les mêmes scènes unity étaient très dures à gérer.</td>
		<td>Nous avons donc décidé de mieux gérer ces conflits en gardant l’idée que chacun travaille sur une branche mais en même temps chacun travaille sur une scène différente en récupérant les travaux faits par les autres à chaque fois que quelqu’un comptait travailler sur l’un de ces scènes.</td>
	</tr>
	<tr class="prob">
		<td>Un autre problème a été avec la génération procédurale. A un moment du développement, le système s'est heurté à un mur, Photon ne pouvait pas supporter la transmission d'autant d'éléments en multijoueur, en effet jusqu'alors il transmettait l'entièreté des routes et des bâtiments aux autres joueurs. Il fallait donc trouver un moyen de n'envoyer que les informations essentielles aux autres joueurs.
		</td>
		<td>Les fonctions RPC ("Remote Procedure Call") permettent d'envoyer des informations de certains types aux autres joueurs (comme des nombres ou des chaînes de caractères) à travers l'appel de fonctions spéciales. Il a donc fallu traduire les informations de génération en une suite de nombre (rangée dans une liste), les envoyer aux autres joueurs puis les retraduire en informations de génération. Ainsi dans la version actuelle du projet, la génération est décidée par un seul joueur, dit "Master" (celui qui a créé la "room") puis les informations de génération sont compactées dans une liste de nombres puis décompactées par les autres joueurs, la génération des bâtiments se fait donc localement.</td>
	</tr>

	<tr class="prob">
		<td>Problème lors de l'adaptation au modèle 3D du personnage et son animation. Avant d'importer ces derniers éléments on utilisait des cubes pour imiter des joueurs, on pouvait alors les faire se déplacer. Mais à partir du moment où l'on a remplacé ces cubes par les modèles 3D des personnages et leur animations cela ne marchait plus correctement.</td>
		<td>Le problème ne venait pas des animations en elles-mêmes ni de l'animator mais des informations envoyées par le navmesh. L'agent ne détectait simplement pas bien le sol et le personnage flottait au dessus, ce qui perturbait le programme. Il a simplement fallu changer quelques paramètres pour qu'il détecte bien le sol. Un autre problème était que le modèle 3D n'était pas défini sous Unity en tant qu'"humanoid", il a donc fallu le changer pour que Unity gère bien les articulations et les propriétés du modèle.</td>
	</tr>
	</table>
	</div>

	<?php include("footer.php"); ?>

	
</body>
</html>
