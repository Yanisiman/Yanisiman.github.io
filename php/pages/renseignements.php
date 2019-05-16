<?php

session_start();

?>



<!DOCTYPE html>

<html>

    <head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../images/icon.png" />
		<link rel="stylesheet" href="../../css/site.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
        <link rel="stylesheet" href="../css/renseignements.css" />
		<title>Renseignements</title>
	</head>


	<body>

		<?php include("header.php");?>
	<div class="content">
		<section id="formulaire">
			<form method="post" action="compte.php">
				<fieldset >
					<legend>Renseignez les informations vous concernant</legend>
					<!-- Formulaire de modifications des informations personnelles de l'utilisateur -->
					
					<table class="tableau">
						
						<tr>
							<td>Votre pseudo</td>
							<td><input type="text" name="pseudo" id="pseudo" placeholder="Ecrivez votre pseudo" maxlength="15" size="25" /></td>
						</tr>
						
						
						<tr>
							<td>Votre mot de passe</td>
							<td><input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Ecrivez votre mot de passe" maxlength="20" size="25" /></td>
						</tr>
						
						<tr>
							<td>Vos passions</td>
							<td><input type="text" name="passions" id="passions" placeholder="Dites nous vos passions" maxlength="255" size="25"  /></td>
						</tr>
						
						<tr>
							<td>Votre métier</td>
							<td><input type="text" name="metier" id="metier" placeholder="Dites nous votre metier" maxlength="25" size="25"  /></td>
						</tr>

						<tr>
							<td>Votre ville</td>
							<td><input type="text" name="ville" id="ville" placeholder="Dites nous votre ville d'habitation" maxlength="25" size="25" /></td>
						</tr>
						

					</table>

					<table>
						<tr>
							<td>Votre email</td>
							<td><input type="email" name="email" id="email" placeholder="Ecrivez votre email" maxlength="30" size="25"  required /></td>
						</tr>
					</table>

					<input id="envoyer" type="submit" value="Envoyer">

				</fieldset>

			</form>
		</section>
	</div>
	</body>

</html>