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

session_start();

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo,message,date_) VALUES(?, ?,CURRENT_DATE())');
$req->execute(array($_SESSION['pseudo'],$_POST['message']));

$req->closeCursor();

// Redirection du visiteur vers la page du minichat
header('Location: accueil.php');
?>