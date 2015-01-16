<?php /* Smarty version Smarty-3.1.15, created on 2015-01-13 03:32:39
         compiled from "template/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15002607254aff70f63f3d5-93540857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0e7a0a26ed018fc8f576346f88c042cf66d6a9' => 
    array (
      0 => 'template/connexion.tpl',
      1 => 1421119952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15002607254aff70f63f3d5-93540857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54aff70f682c12_27664470',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aff70f682c12_27664470')) {function content_54aff70f682c12_27664470($_smarty_tpl) {?>    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 
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
    </form><?php }} ?>
