<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 21:04:03
         compiled from "template/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179926913354aff704ea11a2-48843156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaec5692ea9f959d28c252e3db1518ecf271276' => 
    array (
      0 => 'template/inscription.tpl',
      1 => 1421442218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179926913354aff704ea11a2-48843156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54aff704f05cc5_61444463',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aff704f05cc5_61444463')) {function content_54aff704f05cc5_61444463($_smarty_tpl) {?><script type="text/javascript" src="./includes/verif.js"></script>
<form action="inscription.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article"> 

    <div class="row">

        <div class="span8">      

            <div class="centre"> 

                <h2>Inscription</h2><br> 
                <!-- <br> -> Permet de faire un saut à la ligne -->  

                <p>Saisissez vos informations</p><br>  <!-- Affiche le texte "Saisissez vos informations" -->   

                <div class="clearfix"> <!-- Permet de créer un formulaire Nom -->                            
                    <label for="titre">Nom</label>
                    <div class="input">
                        <input type="text" name="nom" value="" onblur="verifNom(this)">
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer un formulaire Prenom -->                            
                    <label for="titre">Prenom</label>
                    <div class="input">
                        <input type="text" name="prenom" value="" onblur="verifPrenom(this)">
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer un formulaire Email -->                            
                    <label for="titre">Email</label>
                    <div class="input">
                        <input type="text" name="email" value="" onblur="verifMail(this)">
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer un formulaire de Mot de passe -->                            
                    <label for="titre">Mot de passe</label>
                    <div class="input">
                        <input type="password" name="mdp" value="" onblur="verifPswd(this)">
                    </div>
                </div>

                <div class="form-actions"> 
                    <input type="submit" name="inscription" value="S'inscrire" class="btn btn-large btn-primary">
                </div>

            </div>
        </div>
	</div>
</form><?php }} ?>
