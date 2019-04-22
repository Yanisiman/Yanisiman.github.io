<?php 

// On débute une session
session_start();

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=yanis; charset=utf8', 'yanis', 'yanicha25');
}
catch(Exception $e) // Si la connexion à la base de données ne fonctionne pas, un message d'erreur s'affiche alors
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['pseudo'])){
	// Insertion du membre à l'aide d'une requête préparée
	$req = $bdd->prepare('UPDATE membres SET pseudo = :pseudo WHERE email = :email');
	$req->execute(array('pseudo' => htmlspecialchars($_POST['pseudo']), 'email' => htmlspecialchars($_POST['email'])));
	$req->closeCursor();
}

if (isset($_POST['mot_de_passe'])){
	// Insertion du membre à l'aide d'une requête préparée
	$req = $bdd->prepare('UPDATE membres SET mot_de_passe = :mot_de_passe WHERE email = :email');
	$req->execute(array('mot_de_passe' => htmlspecialchars($_POST['mot_de_passe']), 'email' => htmlspecialchars($_POST['email'])));
	$req->closeCursor();
}

if (isset($_POST['passions'])){
	// Insertion du membre à l'aide d'une requête préparée
	$req = $bdd->prepare('UPDATE membres SET passions = :passions WHERE email = :email');
	$req->execute(array('passions' => htmlspecialchars($_POST['passions']), 'email' => htmlspecialchars($_POST['email'])));
	$req->closeCursor();
}

if (isset($_POST['metier'])){
	// Insertion du membre à l'aide d'une requête préparée
	$req = $bdd->prepare('UPDATE membres SET metier = :metier WHERE email = :email');
	$req->execute(array('metier' => htmlspecialchars($_POST['metier']), 'email' => htmlspecialchars($_POST['email'])));
	$req->closeCursor();
}

if (isset($_POST['ville'])){
	// Insertion du membre à l'aide d'une requête préparée
	$req = $bdd->prepare('UPDATE membres SET ville = :ville WHERE email = :email');
	$req->execute(array('ville' => htmlspecialchars($_POST['ville']), 'email' => htmlspecialchars($_POST['email'])));
	$req->closeCursor();
}
	








// On récupère tout le contenu de la table membres de la base de données
$rep = $bdd->prepare('SELECT pseudo, email, mot_de_passe, passions, metier, ville FROM membres WHERE email = ? ');
$rep->execute(array($_SESSION['email']));

// Pour chaque donnée obtenue on les place dans les globales de Session afin de les garder tout le temps sur le site
while ($donnees = $rep->fetch())
{

	$_SESSION['pseudo'] = htmlspecialchars($donnees['pseudo']);
	$_SESSION['mot_de_passe'] = htmlspecialchars($donnees['mot_de_passe']);
	$_SESSION['passions'] = htmlspecialchars($donnees['passions']);
	$_SESSION['metier'] = htmlspecialchars($donnees['metier']) ;
	$_SESSION['ville'] = htmlspecialchars($donnees['ville']);

}

$rep->closeCursor(); // Termine le traitement de la requête

?>



<!DOCTYPE html>

<html>

    <head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="../../css/site.css" />
		<title>Profil</title>
	</head>

	<body>

		<?php include ('header.php'); ?>

		<h2>
			Vos Informations personnelles : 
		</h2>

		<div id="profil"> <!-- On donne les différentes informations de l'utilisateur que l'on a recupéré de la base de données -->

			<p>
				<strong>Nom</strong> : <?php echo $_SESSION['nom'] ; ?>
			</p>

			<p>
				<strong>Prénom</strong> : <?php echo $_SESSION['prenom'] ; ?>
			</p>

			<p>
				<strong>Pseudo</strong> : <?php echo $_SESSION['pseudo'] ; ?>
			</p>

			<p>
				<strong>Age</strong> : <?php echo $_SESSION['age'] . " " . "ans" ; ?>
			</p>

			<p class="infos">
				<strong>Email</strong> : <?php echo $_SESSION['email'] ; ?>
			</p>

			<p>
				<strong>Mot de passe</strong> : <?php 
			$mot_de_passe = str_split($_SESSION['mot_de_passe']); // Découpe chaque lettre du mot de passe et l'insère dans un tableau
			foreach ($mot_de_passe as $value) { // Pour chaque valeur du tableau (donc pour chaque lettre du mot de passe) j'affiche un * à la place d'y afficher la lettre
				$value = '*';
				echo $value;
				// Autre manière possible prendre la len($mot_de_passe) et faire : '*' x len($mot_de_passe)
			}
					
			?>
			</p>

			<p>
				<strong>Date d'inscription</strong> : <?php echo $_SESSION['date_inscription']; ?>
			</p>



			<p>
				<strong>Passions</strong> : 
				<?php 
				if (isset($_POST['passions'])){
					echo $_POST['passions'];
				}
				else
				{
					echo "Vous n'avez pas encore rempli ce champ." ;
				}

				?>
			</p>




			<p>
				<strong>Métier</strong> : 
				<?php
				if (isset($_POST['metier'])) {
					echo $_POST['metier'];
				}
				else
				{
					echo "Vous n'avez pas encore rempli ce champ.";
				}

				?>
			</p>



			 
			<p>
				<strong>Ville</strong> : 
				<?php
				if (isset($_POST['ville'])) {
					echo $_POST['ville'];
				}
				else
				{
					echo "Vous n'avez pas encore rempli ce champ.";
				}

				?>
			</p>
		</div>	

		<form method="post" action="renseignements.php">
			<input id="modifier6" type="submit" value="Modifier"/>
		</form>

		<?php include ('footer.php'); ?>

	</body>

</html>