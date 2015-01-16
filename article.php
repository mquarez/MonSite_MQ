<?php
require_once ('includes/connexion.inc.php'); // Se connecte à la Base de donnée
require_once ('setting/setting.php'); // Affiche les erreurs
require_once ('libs/Smarty.class.php'); // Va chercher la librairie smarty

$smarty = new Smarty();

if ($connect == false) { // Si l'utilisateur est deconnecté alors il sera redirigé vers la page index 
    session_start(); // Démarre la session
    $_SESSION['notification'] = " Veuillez vous authentifié avant d'accéder à cette page."; // Variable de session
    header('location: connexion.php'); // Redirige vers la page de connexion
}

if (isset($_POST['Ajouter']) OR isset($_POST['Modifier'])) {

    session_start(); // Initialise la session
    // On insère dans des variables les valeurs de notre formulaire
    $id = addcslashes($_POST['id'], "'\_*%");	
	$titre = addcslashes($_POST['titre'], "'\_*%");
	$texte = addcslashes($_POST['texte'], "'\_*%");
    $publie = (isset($_POST['publie'])) ? $_POST['publie'] : '0';   // C'est une condition dans le cas où si publie est coché alors il lui donne la valeur 1, sinon il lui donne la valeur 0.
    $date = date('Y-m-d');

    if (isset($_POST['Ajouter'])) { //Si on clique sur Ajouter alors on execute cette requete 
        $sql = "INSERT INTO articles(titre, texte, date, publie) VALUES ('$titre', '$texte', '$date', $publie)"; // Insert nos données et on lui demende de retourner l'id de la ligne qu'il vient d'inserer	        
	    $_SESSION['notification'] = "L'article a était crée avec succès !"; // Ajoute une phrase dans la variable session 
		} else { // Sinon celle ci ( Bouton modifier )
        $sql = "UPDATE articles SET titre = '$titre', texte = '$texte', date='$date', publie='$publie' WHERE id = '$id'"; // Insert nos données et on lui demende de retourner l'id de la ligne qu'il vient d'inserer  
        $_SESSION['notification'] = "L'article a était modifié avec succès !"; // Ajoute une phrase dans la variable session   
	    }

    if (!empty($_POST['image'])) {
        $erreur_img = $_FILES['image']['error'];
    } else {
        $erreur_img = "";
    }

    $result = mysql_query($sql); // Execute la requête d'insertion

	 if (empty($id)) { // Si la variable $id est vide alors on va chercher celle que l'on a recupérer dans le tableau grace a la requête 
	    $id = mysql_insert_id(); // Récupere l'ID de la précedente requête sql executé
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__)."/img/".$id.".jpg"); // Permet de déplacer l'image a la racine de notre serveur tout en renommant le nom de l'image   
		$_SESSION['notification'] = "$id"; // Ajoute une phrase dans la variable session   
    } else { // Sinon on utilise la valeur de la variable $id deja existante
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__)."/img/".$_POST['id'].".jpg"); // Permet de déplacer l'image a la racine de notre serveur tout en renommant le nom de l'image  
    }
	
	header('location: index.php');
	
	 if ($erreur_img != 0) { // Si erreur, il redirige vers la page article en signalant qu'une image n'a pas était mise     
        echo 'Erreur, aucune image n\'a était ajouté !';
        header('location: article.php');
        exit();
    }
		
} else {

    // On initialise les variables à NULL dans un tableau
    $tab = array(
        "id" => NULL,
        "titre" => NULL,
        "texte" => NULL,
		"date" => NULL,
        "publie" => NULL);

    if (isset($_GET['id'])) { //SI il recupere l'id dans l'url alors il execute la requête
		$id = $_GET['id'];
        $req_aff = "SELECT id, titre, texte, publie FROM articles WHERE id ='$id'"; //  Crée la requête d'affichage et sort la date en version Français 
        $exe = mysql_query($req_aff); // Execute la requête et l'ajoute dans une variable         
        $tab = mysql_fetch_array($exe); //Execute la requête et l'affiche ensuite 
		extract($tab);		
    }
	
	$nom_bouton = (isset($_GET['id'])) ? "Modifier" : "Ajouter";  // si il y a un id le bouton s'appelle Modifier sinon il s'apellera ajouter'
	
    include_once ('includes/header.inc.php'); // Affiche le header
    $smarty->assign("tab", $tab);
    $smarty->assign("nom_bouton", $nom_bouton);
    $smarty->display("template/article.tpl");

    include_once ('includes/menu.inc.php');
    include_once ('includes/footer.inc.php');
 
 } ?>