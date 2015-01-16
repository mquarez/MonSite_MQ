<!-- Affiche la tête de page -->
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
        <meta name="description" content="Petit blog pour m'initier à PHP">
        <meta name="author" content="Votre Nom">

        <?php session_start(); // Initialise la session ?> 

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <script type="text/javascript" src="./tinymce/js/tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
            tinymce.init({
                mode: "textareas",
                plugins: "table",
                content_css: "css/content.css",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
                formats: {
                    alignleft: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'left'},
                    aligncenter: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center'},
                    alignright: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'right'},
                    alignfull: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'full'},
                    bold: {inline: 'span', 'classes': 'bold'},
                    italic: {inline: 'span', 'classes': 'italic'},
                    underline: {inline: 'span', 'classes': 'underline', exact: true},
                    strikethrough: {inline: 'del'},
                    customformat: {inline: 'span', styles: {color: '#00ff00', fontSize: '20px'}, attributes: {title: 'My custom format'}}
                }
            });
        </script>
    </head>

    <body>

        <div class="container">

            <div class="content">

                <div class="page-header well">
                    <h1>Mon Blog <small>Le blog de la Loutre Cosmique</small></h1>
                </div>				
				
					<div class="row">

						<div class="span8">  
				