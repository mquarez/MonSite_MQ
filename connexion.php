<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty
include_once ('includes/header.inc.php'); // Affiche le header
   
$smarty = new Smarty();

if ($connect == true) { // Si l'utilisateur est déjà connecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Vous êtes actuellement déjà authentifié."; // Ajoute une phrase dans la variable de session
    header('location: index.php'); // Redirige vers la page de connexion
}

if (isset($_POST['connexion'])) { // Lorsque l'on clique sur le bouton s'inscrire il execute la requete
    $email = addcslashes($_POST['email'], "'\_*%"); // Permet de proteger des injections sql
    $mdp = addcslashes($_POST['mdp'], "'\_*%"); // Permet de proteger des injections sql

    $sql = "SELECT nom, prenom, email, mdp FROM users WHERE email = '$email' AND mdp = '$mdp'"; // Crée la requête d'affichage et sort la date en version Française  

    $exe = mysql_query($sql); // Execute la requête et l'ajoute dans une variable
    $tab = mysql_fetch_array($exe); // Ajoute les valeurs de la requête dans un tableau
	
    if ($tab) { // Si il y a l'existance d'un tableau alors c'est qu'il a récupéré des données -> Connexion Validé
        $sid = md5($tab['email'] . time()); //On crée le sid qui sera une clé unique pour l'utilisateur
        $sql = "UPDATE users SET sid = '$sid' WHERE email = '$email' AND mdp = '$mdp'"; // Insert le sid dans la BDD lié à l'utilisater qui à réussie à se connecter
        mysql_query($sql); // Execute la requête
        setcookie("SID", $sid, time() + 3600); // Expire dans 1 heure
        header('location: index.php'); // Si l connexion réussi alors il redirige vers la page "index.php"
    } else {
        $_SESSION['erreur_connexion'] = "Echec de la connexion, mot de passe ou identifiant incorrect !"; // Ajoute une phrase dans la variable session       
        header('location: connexion.php'); // Reviens automatiquement a la page connexion si une erreur.
    }
} else {
 
    if (isset($_SESSION['erreur_connexion'])) { // Si il y a quelque chose dans la variable de session
        echo ($_SESSION['erreur_connexion']); // Alors il l'affiche
        unset($_SESSION['erreur_connexion']); // Sinon il ne fait rien
    }
	
	if (isset($_SESSION['notification'])) { // Si il y a quelque chose dans la variable de session
		echo ($_SESSION['notification']); // Alors il l'affiche
		unset($_SESSION['notification']); // Sinon il ne fait rien
	}

    $smarty->display("template/connexion.tpl");

    include_once ('includes/menu.inc.php');  // Affiche le menu           
    include_once ('includes/footer.inc.php'); // Affiche le bas de page
    } ?>