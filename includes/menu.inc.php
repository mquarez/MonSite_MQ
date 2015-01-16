<?php // Affiche le menu de navigation du site       ?>
</div> 
<center> 
<nav class="span4">
	<h3>Menu</h3>
    <!-- Créer le formulaire rechercher -->
    <form action ="index.php" method="get" enctype="multipart/form-data" id="form_recherche">
        <div class="clearfix">
            <div class="input">
				<input type="text" name="recherche" id="recherche" placeholder="Votre recherche..."/> 
            </div>
        </div>
        <div class="form-inline">
            <input type="submit" name="" value="Rechercher" class="btn btn-mini btn-primary">
        </div>
    </form>

    <ul>
        <a href="index.php">Accueil</a><br>

        <?php if ($connect == true) { // Si l'utilisateur est connecté alors, il affichera les boutons ci-dessous.'?> 
            <a href="article.php">Rédiger un article</a><br><br>
            <a href="deconnexion.php">Se déconnecter</a><br>
            Statut : Connecté<br>  
            Utilisateur : <?php echo "$nom_user $pre_user";?><br>		
        <?php } else {  // Sinon, si l'utilisateur est déconnecté alors, il affichera les boutons ci-dessous.'?>      
            <a href="inscription.php">S'inscrire</a><br>
            <a href="connexion.php">Se connecter</a><br>
            Statut : Déconnecté<br>
        <?php } ?>
		
		 <!-- Permet de choisir le nombre d'article affiché par page-->
			 <br><p>Nombre d'article par page :</p> 
		 <form action ="index.php" method="post" enctype="multipart/form-data" id="form_nbre_articles">
			<div class="clearfix">
				<div class="input">
					<select name="nbre_articles" id="nbre_articles">
						<option value=1>1</option>
						<option selected="selected" value=2>2</option>
						<option value=5>5</option>
						<option value=10>10</option>
					</select>					
				</div>
				<input type="submit" name="" value="OK" class="btn btn-mini btn-primary"/>
			</div>
		</form>				
    </ul>
	
</nav>
</center> 
</div>
</div>
 

