<!DOCTYPE html>
<!-- Ceci est l'extrait de la page d'accueil sur laquelle vous tomber en allant sur le site. Elle est un extrait de index.php -->
<html>

    <head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="php/images/icon.png" />
        <link rel="stylesheet" href="css/site.css" />
        <link rel="stylesheet" href="php/css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
		<title>Inscris-toi</title>
	</head>

	<body>
		<div id="logo">
		<img src="images/logo2.png" width="25%"/>
		</div>

		<div id="menu">
		<div class="icon"><a href="accueil.php"><img src="images/icon.png" id="icon"></a></div>
		<ul>
		  <li><a href="http://filiga.me/presentation.html">Présentation</a></li>
		  <li><a href="http://filiga.me/profils.html">Profils</a></li>
		  <li><a href="http://filiga.me/programme.html">Calendrier</a></li>
		  <li><a href="http://filiga.me/problemes.html">Problèmes</a></li>
		  <li><a href="http://filiga.me/telechargement.html">Téléchargement</a></li>
		  <li><a href="http://filiga.me/annexes.html">Annexes</a></li>
		  <li><a href="index.php">Connexion</a></li>
		  <!--<li><a href="en/home.html">EN</a></li>-->
		</ul>
		</div>

			<h1>Tales of the apocalypse est fait pour toi.</h1>
			<form method="post" action="index.php" id="connexion">					

					<table>
						<tr>
							<td>Votre email</td>
							<td>Votre mot de passe</td>
						</tr>
						<tr>
							<td><input type="email" name="email" id="email" placeholder="Ecrivez votre email" maxlength="30" size="20" required /></td>
							<td><input type="password" name="mot_de_passe" id="mdp" placeholder="Ecrivez votre mot de passe" maxlength="20" size="20" required /></td>
						</tr>

						</table>

					<div id="co">
						<input id="Connecter" type="submit" value="Se Connecter">
					</div>

			</form>

<!--
		<form class="box" action="index.php" method="post">
			<h1>LOGIN</h1>
			<input type="text" name="email" placeholder="email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="email" placeholder="email">
		</form>
-->

		<section id="formulaire"> 
			<!-- On crée un formulaire afin de recueillir les différentes informations et de les mettre dans une base de données que l'on pourra ensuite ressortir plus tard --> 
				<form method="post" action="redirect.php">
					<fieldset>
						<legend>Pas encore inscris ? Remplis donc ces quelques informations</legend>
						<!-- On crée un tableau afin de mieux organiser la mise en page du formulaire -->
						<table>
						<tr>
							<td>Votre pseudo</td>
							<td><input type="text" name="pseudo" id="pseudo" placeholder="Ecrivez votre pseudo" maxlength="15" size="20" required /></td>
						</tr>
						<tr>
							<td>Votre prénom</td>
							<td><input type="text" name="prenom" id="prenom" placeholder="Ecrivez votre prénom" maxlength="15" size="20" required /></td>
						</tr>
						<tr>
							<td>Votre nom</td>
							<td><input type="text" name="nom" id="nom" placeholder="Ecrivez votre nom" maxlength="15" size="20" required /></td>
						</tr>
						<tr>
							<td>Votre age</td>
							<td><input type="text" name="age" id="age" placeholder="Ecrivez votre age" maxlength="5" size="20" required /></td>
						</tr>
						<tr>
							<td>Votre email</td>
							<td><input type="email" name="email" id="email" placeholder="Ecrivez votre email" maxlength="30" size="20" required /></td>
						</tr>
						<tr>
							<td>Votre mot de passe</td>
							<td><input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Ecrivez votre mot de passe" maxlength="20" size="20" required /></td>
						</tr>

						<tr>
							<td>Confirmez votre mot de passe</td>
							<td><input type="password" name="mdp_confirm" id="mdp_confirm" placeholder="Ecrivez votre mot de passe" maxlength="20" size="20" required /></td>
						</tr>
						</table>

						<input id="envoyer" type="submit" value="S'inscrire">

					</fieldset>

				</form>
			</section>

				


	</body>

</html>