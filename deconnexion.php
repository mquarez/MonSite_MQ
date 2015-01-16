<?php

require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty

$smarty = new Smarty();
$notification = "Vous vous etes deconnecte avec succes ! Redirection en cours..."; //Crée une variable notification
$smarty->assign("notification", $notification); // Crée une variable smartie qui aura pour variable php assigné : la variable notification
$smarty->display("template/deconnexion.tpl");
setcookie('SID', '', 0); // On remplace le cookie nommé "sid" par un cookie vide afin de le detruire
 
?>
