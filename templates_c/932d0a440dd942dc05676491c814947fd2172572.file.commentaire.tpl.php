<?php /* Smarty version Smarty-3.1.15, created on 2015-01-14 23:42:13
         compiled from "template/commentaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109185414354b524a8834612-78708238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '932d0a440dd942dc05676491c814947fd2172572' => 
    array (
      0 => 'template/commentaire.tpl',
      1 => 1421278931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109185414354b524a8834612-78708238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b524a88befc9_66958538',
  'variables' => 
  array (
    'tab' => 0,
    'tab_coms' => 0,
    'i' => 0,
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b524a88befc9_66958538')) {function content_54b524a88befc9_66958538($_smarty_tpl) {?><div class="row">
   <div class="span8">
        <div class="centre"> 

			<!-- Affichage de l'article séléctionné -->  
			
			<h2><?php echo $_smarty_tpl->tpl_vars['tab']->value['titre'];?>
</h2></br> <!-- Affiche le titre de l'article -->  
			<p><?php echo $_smarty_tpl->tpl_vars['tab']->value['texte'];?>
</p></br>  <!-- Affiche le texte de l'article -->   
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
.jpg" width ='500'/><br><br> <!-- Va chercher l'images qui à l'id correspondant à l'id de l'article séléctionné -->              
			<span><?php echo $_smarty_tpl->tpl_vars['tab']->value['date_fr'];?>
</span></br></br></br> <!-- Affiche la date en version française de l'article -->

		
			
			<!-- Affichage des commentaires -->   
			
			<?php if ($_smarty_tpl->tpl_vars['tab_coms']->value=='') {?>
				<p>Aucun commentaire pour l'article séléctioné.</p><br>
					<?php } else { ?>
						<div>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_coms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<h3><?php echo $_smarty_tpl->tpl_vars['i']->value['pseudo'];?>
</h3> <!-- Affiche le pseudonyme du commentaire --> 
								<p><?php echo $_smarty_tpl->tpl_vars['i']->value['texte'];?>
</p> <!-- Affiche le texte du commentaire --> 
								<p><?php echo $_smarty_tpl->tpl_vars['i']->value['date_fr'];?>
</p> <!-- Affiche la date à laquel le commentaire a était posté --> 
							<?php } ?>
						</div>
			<?php }?>
			
			<!-- Formulaire de commentaire --> 
			
		<form action="commentaire.php?id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" method="post" enctype="multipart/form-data" id="form_commentaire" name="form_commentaire"> 

                <div class="clearfix"> <!-- Permet de créer un formulaire Titre -->                            
                    
                    <div class="input">
                        <input type="hidden" name="id_article" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
"/>
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
</div><?php }} ?>
