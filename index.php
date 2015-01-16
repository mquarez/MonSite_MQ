<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty
include_once ('includes/header.inc.php'); // Affiche le header

$smarty = new Smarty();
 if (isset($_SESSION['notification'])) { // Si il y a quelque chose dans la variable de session
        echo ($_SESSION['notification']); // Alors il l'affiche
        unset($_SESSION['notification']); // Sinon il ne fait rien
    }

$nbre_article_par_page = 2; // Nombres d'articles autorisé à afficher par page
$page_actuel = (isset($_GET['p'])) ? $_GET['p'] : 1; // La variable de la page courante | Par défault la page 1 est affiché si erreur

function pagination($nbre_article_par_page, $page_actuel) { // C'est ce qu'il y aura dans la fonction             
$count = "Select count(id) as nb_article FROM articles WHERE publie = 1"; // Compte le nbres d'articles en BDD
$exe = mysql_query($count); // Execute la fonction  
$tab = mysql_fetch_array($exe); // Mets les resultats dans un tableau     
$nbre_page = ceil($tab[0] / $nbre_article_par_page); // Calcule le nbres de pages qui afficherons des articles 
$index = ($page_actuel - 1) * $nbre_article_par_page; // Permet de trouver l'article qui sera l'index de la page actuel
return array($nbre_page, $index); // $tab_page[0] = $nbre_page || $tab_page[1] = $index
}

$tab_page = pagination($nbre_article_par_page, $page_actuel); // Appelle la fonction de pagination des articles puis insert les valeurs dans la variable $tab_page        

if (isset($_GET['recherche'])) { // Si il y a quelque chose dans la methode $_GET         
$recherche = addcslashes($_GET['recherche'], "'\_*%");
$req_aff = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 AND (titre LIKE '%$recherche%' OR texte LIKE '%$recherche%') ORDER BY id ASC"; // Crée la requête d'affichage, sort la date en version Française et fais une recherche du mot $recherche qu'il soit avant ou après.
$exe = mysql_query($req_aff); // Execute la requete et l'ajoute dans une variable 
} else if (isset($_POST['nbre_articles'])) { // Si il y a quelque chose dans la methode $_POST  
$nombre_articles = $_POST['nbre_articles'];
$req_aff = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 ORDER BY id ASC LIMIT $tab_page[1], $nombre_articles";  // Execute la requete d'affichage permettant la pagination
$exe = mysql_query($req_aff); // Execute la requête et l'ajoute dans une variable
} else { // Sinon si il y a rien dans la methode $_GET  ET la méthode POST alors on affiche les articles normalement
$req_aff = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie = 1 ORDER BY id ASC LIMIT $tab_page[1], $nbre_article_par_page";  // Execute la requete d'affichage permettant la pagination
$exe = mysql_query($req_aff); // Execute la requête et l'ajoute dans une variable 
}
while($tab = mysql_fetch_array($exe)){$tab1[] = $tab;}

$smarty->assign("nbre_page", $tab_page[0]);
$smarty->assign("tab", $tab1);
$smarty->assign("connect", $connect);
$smarty->display("template/index.tpl");


include_once ('includes/menu.inc.php');  // Affiche le menu    
include_once ('includes/footer.inc.php'); // Affiche le bas de page ?>


