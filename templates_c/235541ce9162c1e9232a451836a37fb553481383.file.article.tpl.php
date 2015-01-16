<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 17:10:32
         compiled from "template/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136143689754aff90f639211-57360531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235541ce9162c1e9232a451836a37fb553481383' => 
    array (
      0 => 'template/article.tpl',
      1 => 1421421048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136143689754aff90f639211-57360531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54aff90f986936_99596493',
  'variables' => 
  array (
    'tab' => 0,
    'nom_bouton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aff90f986936_99596493')) {function content_54aff90f986936_99596493($_smarty_tpl) {?>    <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 

        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>
"/>

        <div class="row">

            <div class="span8">      

                <div class="clearfix"> <!-- Permet de créer un formulaire -->                            
                    
					<label for="titre">Titre</label>
                    <div class="input">
                        <input type="text" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value['titre'];?>
"> <!-- Définie le titre -->
                    </div>
                         
                    <label for="text">Texte</label>
                    <div class="input">
                        <textarea name="texte" id="texte"><?php echo $_smarty_tpl->tpl_vars['tab']->value['texte'];?>
</textarea> <!-- Définie le texte -->
                    </div>
                  							
					<label for="image">Insérer une image :</label>
					<div class ="input">
						<input type="file" name="image" id="image">
					</div><br>			
				        
                    <label for="publie">Publié</label>
                    <div class="input">
                        <input type="checkbox" name="publie" id="publie" value="1"  <?php if ($_smarty_tpl->tpl_vars['tab']->value['publie']!='0') {?> checked <?php }?> > <!-- Permet si on coche la case de mettre l'article en mode 1 (visible)  -->
                    </div>

                <div class="form-actions">                   
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['nom_bouton']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['nom_bouton']->value;?>
" class="btn btn-large btn-primary">
                </div>
				
				</div>
				
			</div>
			
		</div>
		
	</form><?php }} ?>
