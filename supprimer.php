<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
?>




<?php

if ($connect == false) { // Si l'utilisateur est deconnecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Veuillez vous authentifié avant d'accéder à cette page.";
    header('location: connexion.php'); // Redirige vers la page de connexion
} else {
    $id = $_GET['id']; // Met l'id récupéré dans l'url dans une variable $id

    $sql = "DELETE FROM articles WHERE id = $id"; // Permet de supprimer l'article correspondant à l'ID
    mysql_query($sql); // Execute la requete sql

    if (file_exists(dirname(__FILE__) . "/img/$id.jpg")) { // Permet de supprimer l'image correspondant à l'ID de l'article à supprimer
        unlink(dirname(__FILE__) . "/img/$id.jpg");
    }

    session_start(); // Initialise la session
    $_SESSION['notification'] = "L'article a était supprimé avec succès !"; // Ajoute une phrase dans la variable session       

    header('location: index.php'); // Retourne à l'acceuil
}
?>
