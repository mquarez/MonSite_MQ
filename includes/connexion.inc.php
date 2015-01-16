<?php
// Connexion à la base de donnée
$bdd = mysql_connect("mysql.hostinger.fr", "u787787835_blog", "quarez.mickael") or die('Connexion impossible :' . mysql_error());//Si erreur, l'afficher
mysql_select_db("u787787835_blog");  // Selectionne le nom de la base de donnée voulu
 
if($connect == true) { // Si l'utilisateur est deconnecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Vous êtes déjà connecté !";
    header('location: index.php'); // Redirige vers la page de connexion
}

$connect = false ; // De base $connect sera en false soit "Déconnecté"

if (isset($_COOKIE['SID'])) { // Verifie si il existe un cookie nommé SID
    $sid = $_COOKIE['SID']; // Met la variable du cookie dans une variable $sid
    $sql = "SELECT nom, prenom FROM users WHERE sid = '$sid'"; // Crée la requête pour selectionner l'utilisateur qui concorde avec ce SID
    $exe = mysql_query($sql); // Execute la requête
	$tab = mysql_fetch_array($exe); // Ajoute les valeurs de la requête dans un tableau
	$nom_user = $tab['nom'];
	$pre_user = $tab['prenom'];
    $connect = true ;
} 
?>
