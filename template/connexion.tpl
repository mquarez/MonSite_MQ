    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 
                <div class="centre"> 

                    <h2>Connexion</h2><br> 
                    <!-- <br> -> Permet de faire un saut à la ligne -->  

                    <p>Saisissez vos identifiants !</p><br>  <!-- Affiche le texte "Saisissez vos informations" -->          

                    <div class="clearfix"> <!-- Permet de créer un formulaire Email -->                            
                        <label for="titre">Email</label>
                        <div class="input">
                            <input type="text" name="email" value="">
                        </div>
                    </div>

                    <div class="clearfix"> <!-- Permet de créer un formulaire de Mot de passe -->                            
                        <label for="titre">Mot de passe</label>
                        <div class="input">
                            <input type="password" name="mdp" value="">
                        </div>
                    </div>

                    <div class="form-actions"> 
                        <input type="submit" name="connexion" value="Se connecter" class="btn btn-large btn-primary">
                    </div>

                </div>
    </form>