<div class="row">
   <div class="span8">
        <div class="centre"> 

			<!-- Affichage de l'article séléctionné -->  
			
			<h2>{$tab.titre}</h2></br> <!-- Affiche le titre de l'article -->  
			<p>{$tab.texte}</p></br>  <!-- Affiche le texte de l'article -->   
			<img src="img/{$tab.id}.jpg" width ='500'/><br><br> <!-- Va chercher l'images qui à l'id correspondant à l'id de l'article séléctionné -->              
			<span>{$tab.date_fr}</span></br></br></br> <!-- Affiche la date en version française de l'article -->

		
			
			<!-- Affichage des commentaires -->   
			
			{if $tab_coms == ""}
				<p>Aucun commentaire pour l'article séléctioné.</p><br>
					{else}
						<div>
							{foreach from=$tab_coms item=i}
								<h3>{$i.pseudo}</h3> <!-- Affiche le pseudonyme du commentaire --> 
								<p>{$i.texte}</p> <!-- Affiche le texte du commentaire --> 
								<p>{$i.date_fr}</p> <!-- Affiche la date à laquel le commentaire a était posté --> 
							{/foreach}
						</div>
			{/if}
			
			<!-- Formulaire de commentaire --> 
			
		<form action="commentaire.php?id={$_GET.id}" method="post" enctype="multipart/form-data" id="form_commentaire" name="form_commentaire"> 

                <div class="clearfix"> <!-- Permet de créer un formulaire Titre -->                            
                    
                    <div class="input">
                        <input type="hidden" name="id_article" value="{$_GET.id}"/>
                    </div>
               
                    <label for="text">Pseudonyme</label>
                    <div class="input">
                        <input type="text" name="pseudonyme" id="pseudonyme" placeholder='Entrer votre pseudonyme'/> <!-- Définie le pseudonyme de la personne faisant ce commentaire -->
                    </div>            
                
                    <label for="image">E-Mail</label>
                    <div class="input">
                        <input type="text" name="mail" id="mail" placeholder='Entrer votre e-mail'/> <!-- Définie le mail de la personne faisant ce commentaire -->
                    </div><br>
                           
                    <label for="publie">Commentaire</label>
                    <div class="input">
                        <textarea name ="commentaire" id="commentaire"></textarea> <!--  Définie le commentaire en rapport à l'article -->
                    </div>
                
					<div class="form-actions">                   
						<input type="submit" name="envoyer" value="Envoyer" class="btn btn-large btn-primary">
					</div>

				</div>
			
		</form>
		
		</div>
	</div>
</div>