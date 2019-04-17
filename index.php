<!-- Il s'agit de la page sur laquelle on tombe lorsque l'on arrive sur le site. Il s'agit d'un formulaire pour s'inscrire à notre site afin de pouvoir découvrir les autres pages du site en étant redirigé vers la page d'accueil du site -->
<?php

session_start();

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=yanis; charset=utf8', 'yanis', 'yanicha25');
}
catch(Exception $e) // Si la connexion à la base de données échoue, un message d'erreur s'affiche alors
{
        die('Erreur : '.$e->getMessage());
}

// Si il existe des variables provenant d'un formulaire envoyées avec la méthode "post", alors:
if (isset($_POST['email']) and isset($_POST['mot_de_passe'])){
	
	// On récupère tout le contenu de la table membres de la base de données
	$reponse = $bdd->prepare('SELECT email, mot_de_passe FROM membres WHERE email = ?');

	$reponse->execute(array($_POST['email']));
	$donnees = $reponse->fetch();	

	
	if ($donnees['mot_de_passe'] == $_POST['mot_de_passe']) {
		
		$_SESSION['email'] = $_POST['email'];

		// On redirige vers la page d'accueil
		header('Location: php/pages/accueil.php');
	}
	
	elseif ($donnees['mot_de_passe'] != $_POST['mot_de_passe']) {

		include ('login.php');
		echo 'Votre email ou votre mot de passe est incorrecte';
	}

	$reponse->closeCursor();

}
	
		
// Sinon on fait apparaître le formulaire de connexion à partir d'un ... (include)
else{

	include ('login.php');

}

?>