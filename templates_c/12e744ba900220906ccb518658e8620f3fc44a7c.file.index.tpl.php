<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 17:09:43
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7708927525494f597644977-74100991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1421427686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7708927525494f597644977-74100991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5494f59767d6a8_48807676',
  'variables' => 
  array (
    'tab' => 0,
    'i' => 0,
    'connect' => 0,
    'nbre_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5494f59767d6a8_48807676')) {function content_5494f59767d6a8_48807676($_smarty_tpl) {?><div class="row">
   <div class="span8">
        <div class="centre"> 
		
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?> <!-- Permet d'avoir des liens permettant d'aller à la page voulu -->
                <!-- Affiche des valeurs tant qu'il y en n'a dans la base de donnée -->
                <h2><?php echo $_smarty_tpl->tpl_vars['i']->value['titre'];?>
</h2><br> <!-- <br> -> Permet de faire un saut à la ligne -->  
                <p><?php echo $_smarty_tpl->tpl_vars['i']->value['texte'];?>
</p><br>  <!-- Affiche le texte de l'article -->   
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
.jpg" width ='500'><br><br> <!-- Va chercher les images qui on le même nom que l'id d'un article et la redimensionner-->              
                <span><?php echo $_smarty_tpl->tpl_vars['i']->value['date_fr'];?>
</span><br> <!-- Affiche la date en version française -->
				<p><a href="commentaire.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Espace commentaire(s)</a></p><br>  <!-- Affiche l'espace commentaire -->  
                
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['connect']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==true) {?>  <!-- Si l'utilisateur est déconnecté alors il sera redirigé vers la page index    -->
                    <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
 "><input type="submit" name="envoyer" value="Modifier" class="btn btn-large btn-primary"></a> <!-- Affiche un bouton modifier qui prendra l'id -->
                    <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><input type="submit" name="envoyer" value="Supprimer" class="btn btn-large btn-primary"></a><br><br><br> <!-- Affiche un bouton supprimer qui prendra l'id -->  
                <?php }?>
			<?php } ?>

	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['nbre_page']->value) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['nbre_page']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?> <!-- Permet d'avoir des liens permettant d'aller à la page voulu -->
		<a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 </a>
	<?php }} ?>

		</div>
	</div>
</div>




<?php }} ?>
