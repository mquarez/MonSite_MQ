<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty
include_once ('includes/header.inc.php'); // Affiche le header

$smarty = new Smarty();

if ($connect == false) { // Si l'utilisateur est deconnecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Veuillez vous authentifié avant d'accéder à cette page."; // Variable de session
    header('location: connexion.php'); // Redirige vers la page de connexion
}

if (isset($_POST['Envoyer'])) {
	$pseudonyme = $_POST['pseudonyme'];	
    $mail = $_POST['mail'];
    $commentaire = $_POST['commentaire'];
	$date = date('Y-m-d');
	
	$sql = 'INSERT INTO commentaire (pseudo, texte, date, mail, id_coms) VALUES ("'.$pseudonyme.'", "'.$commentaire.'", "'.$date.'", "'.$mail.'", '.$id_article.')'; // Insert nos données dans la table commentaire       
	mysql_query($sql); // Execute la requête d'insertion
    $_SESSION['notification'] = "Le commentaire a était crée avec succès !"; // Ajoute une phrase dans la variable session 
    header('location: index.php');
	}
	
	$id_article = $_GET['id'];
	
	$req_aff = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE id = $id_article";
	$exe = mysql_query($req_aff);
	
	$req_aff_coms = "SELECT pseudo, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr, mail  FROM commentaire WHERE id_coms = $id_article";  // Execute la requete d'affichage permettant la pagination
	$exe2 = mysql_query($req_aff_coms); // Execute la requête et l'ajoute dans une variable
	$tab_coms = mysql_fetch_array($exe2);
	
while ($tab = mysql_fetch_array($exe)) { // Execute la requête et l'affiche ensuite
$smarty->assign("tab", $tab);
$smarty->assign("tab_coms", $tab_coms);
$smarty->display("template/commentaire.tpl");
}

include_once ('includes/menu.inc.php');  // Affiche le menu    
include_once ('includes/footer.inc.php'); // Affiche le bas de page ?>