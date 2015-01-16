<div class="row">
   <div class="span8">
        <div class="centre"> 
		
			{foreach from=$tab item=i} <!-- Permet d'avoir des liens permettant d'aller à la page voulu -->
                <!-- Affiche des valeurs tant qu'il y en n'a dans la base de donnée -->
                <h2>{$i['titre']}</h2><br> <!-- <br> -> Permet de faire un saut à la ligne -->  
                <p>{$i['texte']}</p><br>  <!-- Affiche le texte de l'article -->   
                <img src="img/{$i['id']}.jpg" width ='500'><br><br> <!-- Va chercher les images qui on le même nom que l'id d'un article et la redimensionner-->              
                <span>{$i['date_fr']}</span><br> <!-- Affiche la date en version française -->
				<p><a href="commentaire.php?id={$i['id']}">Espace commentaire(s)</a></p><br>  <!-- Affiche l'espace commentaire -->  
                
                {if {$connect} == true}  <!-- Si l'utilisateur est déconnecté alors il sera redirigé vers la page index    -->
                    <a href="article.php?id={$i['id']} "><input type="submit" name="envoyer" value="Modifier" class="btn btn-large btn-primary"></a> <!-- Affiche un bouton modifier qui prendra l'id -->
                    <a href="supprimer.php?id={$i['id']}"><input type="submit" name="envoyer" value="Supprimer" class="btn btn-large btn-primary"></a><br><br><br> <!-- Affiche un bouton supprimer qui prendra l'id -->  
                {/if}
			{/foreach}

	{for $i=1; $i <= $nbre_page; $i++} <!-- Permet d'avoir des liens permettant d'aller à la page voulu -->
		<a href="index.php?p={$i}">{$i} </a>
	{/for}

		</div>
	</div>
</div>




