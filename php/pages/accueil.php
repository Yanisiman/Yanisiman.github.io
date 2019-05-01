<?php


// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=yanis; charset=utf8', 'yanis', 'yanicha25');
}
catch(Exception $e) // Si la connexion à la base de données ne fonctionne pas, un message d'erreur s'affiche alors
{
        die('Erreur : '.$e->getMessage());
}

// On créé une session afin de pouvoir y mettre ensuite différentes variables que l'on pourra alors garder pendant toute la session sur le site 
session_start();

if (is_null($_SESSION['email'])) {
	header('Location: http://filiga.me/pages/accueil.html');
}

// On récupère tout le contenu de la table membres de la base de données
$req = $bdd->prepare('SELECT nom, prenom, pseudo, age, email, mot_de_passe, date_inscription, passions, metier, ville FROM membres WHERE email = ? ');
$req->execute(array($_SESSION['email']));

// Pour chaque .... on les place dans les globales de Session afin de les garder tout le temps sur le site
while ($donnees = $req->fetch())
{
	$_SESSION['nom'] = $donnees['nom'];
	$_SESSION['prenom'] = $donnees['prenom'];
	$_SESSION['pseudo'] = $donnees['pseudo'];
	$_SESSION['age'] = $donnees['age'];
	$_SESSION['mot_de_passe'] = $donnees['mot_de_passe'];
	$_SESSION['date_inscription'] = $donnees['date_inscription'];
	$_SESSION['passions'] = $donnees['passions'];
	$_SESSION['metier'] = $donnees['metier'];
	$_SESSION['ville'] = $donnees['ville'];

}

$req->closeCursor(); // Termine le traitement de la requête

?>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../images/icon.png" />
<link rel="stylesheet" href="../../css/site.css"/>
<link rel="stylesheet" href="../../css/home.css"/>
<meta charset="utf-8"/>
<title>FIG</title>
</head>
<body>

<?php include("header.php");?>

<div class="content" id="home">
<div id="accueil">
<p id="welcome">Bienvenue sur le site officiel de TotA!</p> 
Vous pourrez y trouver de nombreuses informations sur le jeu, l'équipe de développeurs, mais aussi sur les différents 
moyens d'obtenir le jeu et les annexes inhérentes à ce dernier.
</div>

<iframe width="895" height="507" src="https://www.youtube.com/embed/gciIX6z9yjM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div id="section">	

		<div id="formulaire">

			<form action="minichat.php" method="post">

				<fieldset>
					
					<legend>Mini chat afin de discuter avec les autres membres du site</legend>

					<table>
			      	

				        <tr>
							<td>Votre pseudo</td>
							<td><input type="text" name="pseudo" id="pseudo" placeholder="Ecrivez votre pseudo" maxlength="15" size="50" required /></td>
							</tr>

							<tr>
							<td>Votre message</td>
							<td><input type="text" name="message" id="message" placeholder="Ecrivez votre message" maxlength="255" size="50" required /></td>
							</tr>
					</table>

				    <input type="submit" value="Envoyer" />

			    </fieldset>
					
		    </form>

		</div>

		<div id="chat">
		<?php
		// Connexion à la base de données
		try
		{
			$bdd = new PDO('mysql:host=localhost; dbname=yanis; charset=utf8', 'yanis', 'yanicha25');
		}
		catch(Exception $e) // Si la connexion à la base de données échoue, un message d'erreur s'affiche alors
		{
		        die('Erreur : '.$e->getMessage());
		}

		// Récupération des 10 derniers messages dans la table minichat de la base de données
		$reponse = $bdd->query('SELECT pseudo, message, date_ FROM minichat ORDER BY ID DESC LIMIT 0, 10');

		// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
		while ($donnees = $reponse->fetch())
		{ 
			echo '<p class="chat"><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . ' ( ' . $donnees['date_']. ' )</p>';
		}

		$reponse->closeCursor();

		?>
		</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>