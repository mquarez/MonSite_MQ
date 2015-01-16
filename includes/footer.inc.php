<?php  // Affiche le pied de page ?>
<footer>
	<?php  // Compteur de visite
    if (file_exists('compteur_visites.txt')) { // Fichier dans lequel il incremente les visites, si il existe
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f); // Nbre de visite sur le site
    } else { // Sinon il le crée et le démarre à 0;
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
    }
    if (!isset($_SESSION['compteur_visite'])) {
        $_SESSION['compteur_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
    }
    fclose($compteur_f);
    echo '<center><strong>' . $compte . '</strong> VISITE(S)</center>';
    ?>
	
    
       <center><p>&copy; ULCO 2014 - 2015</p></center>
</footer>

</body> 
</div>
</html>