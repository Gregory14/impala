<?php session_start() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 is-ie-7" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 is-ie8" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Atmosphère</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="stylesheets/screen.css">
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
    </head>
    <body role="document">

        <header id="header" role="banner">
          
        </header>
        <section>
    <div id="content">
		<div id="waiting">
    	
    	<header>
            <h1><img src="img/impala-logo-200-136.png" alt="Atmosphère"/></h1>
        </header>
        <section id="content">
        	<p class="size25" >Soyez les premiers à assister au lancement d'Atmosphère !</p>
        	<form method="post" action="traitement/newsletter.php">
        		<ul>
        			<li><input type="nom" name="nom" placeholder="Votre nom" value="<?php if (isset($_POST['nom'])) {echo htmlspecialchars($_POST['nom']);} ?>"/></li>
        			<li><input type="prenom" name="prenom" placeholder="Votre prénom" value="<?php if (isset($_POST['prenom'])) {echo htmlspecialchars($_POST['prenom']);} ?>"/></li>	
        			<li><input type="email" name="email" placeholder="Votre adresse mail" value="<?php if (isset($_POST['email'])) {echo htmlspecialchars($_POST['email']);} ?>"/></li>
        			<li><input type="submit" name="inscription" value="Inscription" /></li>
        		</ul>
        		<?php
			    if(isset($_GET['reponse']))
			    {
			        echo '<p class="red">'.$_GET['reponse'].'</p>';
			    }
			    ?>
        	</form>
        	<p class="size20">Vous souhaitez en savoir davantage ?</p>
        	<p class="size16">Retrouvez-nous sur les réseaux sociaux</p>
       
        	<ul id="reseaux">
        		<li class="facebook"><a href="https://www.facebook.com/pages/Made-In-Home/594813007248279" title="facebook" target="_blank">Facebook</a></li>
        		<li class="twitter"><a href="https://twitter.com/MadeInHome_3D" title="twitter" target="_blank">Twitter</a></li>
        		<li class="youtube"><a href="http://www.youtube.com/channel/UC1yUBkSL_ZSok7ieIF43IZg" title="Youtube" target="_blank">Youtube</a></li>
        	</ul>
        	<div class="clear"></div>
<!-- START Footer -->
<?php include("includes/footer.php"); ?>
<!-- END footer -->