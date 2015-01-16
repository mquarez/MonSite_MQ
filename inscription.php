<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty
include_once ('includes/header.inc.php'); // Affiche le header

$smarty = new Smarty();
        
if($connect == true) { // Si l'utilisateur est déjà connecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Vous êtes actuellement déjà authentifié.";
    header('location: index.php'); // Redirige vers la page de connexion
}

if (isset($_POST['inscription'])) { // Lorsque l'on clique sur le bouton s'inscrire il execute la requete
    $nom = addcslashes($_POST['nom'], "'\_*%"); // Permet de proteger des injections sql
    $prenom = addcslashes($_POST['prenom'], "'\_*%"); // Permet de proteger des injections sql
    $email = addcslashes($_POST['email'], "'\_*%"); // Permet de proteger des injections sql
    $mdp = addcslashes($_POST['mdp'], "'\_*%"); // Permet de proteger des injections sql

    $sql = "INSERT INTO users(nom, prenom, email, mdp) VALUES('$nom', '$prenom', '$email', '$mdp')"; // Insert les données de l'utilisateur fraichement crée
    mysql_query($sql); // Execute la requête

    session_start(); // Démarre la variable de session
    $_SESSION['notification'] = "L'utilisateur à était crée avec succès. Connectez-vous dès à présent !"; // Ajoute une phrase dans la variable de session     
    header('location: connexion.php'); // Reviens automatiquement à la page connexion.php
}

$smarty->display("template/inscription.tpl");
include_once ('includes/menu.inc.php');  // Affiche le menu  
include_once ('includes/footer.inc.php'); // Affiche le bas de page  ?>



