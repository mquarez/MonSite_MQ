    <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 

        <input type="hidden" name="id" value="{$smarty.get.id}"/>

        <div class="row">

            <div class="span8">      

                <div class="clearfix"> <!-- Permet de créer un formulaire -->                            
                    
					<label for="titre">Titre</label>
                    <div class="input">
                        <input type="text" name="titre" id="titre" value="{$tab.titre}"> <!-- Définie le titre -->
                    </div>
                         
                    <label for="text">Texte</label>
                    <div class="input">
                        <textarea name="texte" id="texte">{$tab.texte}</textarea> <!-- Définie le texte -->
                    </div>
                  							
					<label for="image">Insérer une image :</label>
					<div class ="input">
						<input type="file" name="image" id="image">
					</div><br>			
				        
                    <label for="publie">Publié</label>
                    <div class="input">
                        <input type="checkbox" name="publie" id="publie" value="1"  {if $tab.publie neq '0'} checked {/if} > <!-- Permet si on coche la case de mettre l'article en mode 1 (visible)  -->
                    </div>

                <div class="form-actions">                   
                    <input type="submit" name="{$nom_bouton}" value="{$nom_bouton}" class="btn btn-large btn-primary">
                </div>
				
				</div>
				
			</div>
			
		</div>
		
	</form>