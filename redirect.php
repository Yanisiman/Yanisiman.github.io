<?php

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=yanis; charset=utf8', 'yanis', 'yanicha25');
	
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// On débute une session
session_start();

$_SESSION['email'] = $_POST['email'];

// Hachage du mot de passe
//$pass_hache = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

if (isset($_POST['mot_de_passe']) and isset($_POST['mdp_confirm'])){


	if ($_POST['mdp_confirm'] == $_POST['mot_de_passe']){
		/*
		// On récupère tout le contenu de la table membres de la base de données
		$reta = $bdd->query('SELECT email, pseudo FROM membres');

		// Pour chaque .... 
		$donnees = $reta->fetch()
		
		if ($_POST['email'] != $donnees['email']){
		*/
			// Insertion du membre à l'aide d'une requête préparée
			$req = $bdd->prepare('INSERT INTO membres (nom, prenom, pseudo, age, email, mot_de_passe, date_inscription) VALUES(?,?,?,?,?,?, CURRENT_DATE())');

			$req->execute(array(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['age']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['mot_de_passe'])));

			$req->closeCursor();

			// Redirection du visiteur vers la page d'accueil du site
			header('Location: php/pages/accueil.php');
			/*
		}

		elseif($_POST['pseudo'] == $donnees['pseudo']){

			include ('login.php');
			echo "Le pseudo que vous avez choisi à déjà été pris.";

		} 


		elseif ($_POST['email'] == $donnees['email']){
			include ('login.php');
			echo "L'email est déjà pris par quelqu'un d'autre.";
		}

		

		$reta->closeCursor(); // Termine le traitement de la requête
		*/
	}
	
	else {
		include ('login.php');
		echo 'Vos mots de passe sont différents.';
	}
}
?>