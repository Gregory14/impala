<?php session_start(); 
include_once("traitement/analyticstracking.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 is-ie-7" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 is-ie8" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Atmosphère</title>
        <meta name="description" content="Le site référent pour sortir avec tes potes. Loupe pas le coche !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="stylesheets/screen.css">
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
    </head>
    <body role="document">
        <div id="waiting">    
        	<section id="content">
                <header>
                  <h1><img src="img/logo-atmosphere-loading-page.png" alt="Atmosphère Parigot"/>Atmosphère Parigot</h1>
                </header>   
                <section id="waiting-content">
                    <h2>Loupe pas le coche !</h2>
                    <p>En 30 secondes tu gagnes une invitation pour le premier événement de ton nouveau site référent pour organiser tes sorties dans Paris et c’est gratuit !</p>
                    <form name="formWaiting" method="post" action="traitement/newsletter.php">
                       <label for="nom">Nom :</label>
                       <input id="nom" type="text" name="nom" placeholder="Votre nom" value="<?php if (isset($_POST['nom'])){ echo htmlspecialchars($_POST['nom']); } ?>"/>
                       <label for="prenom">Prénom :</label>
                       <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" value="<?php if (isset($_POST['prenom'])){ echo htmlspecialchars($_POST['prenom']);} ?>"/>
                       <label for="email">Email :</label>
                       <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php if (isset($_POST['email'])){ echo htmlspecialchars($_POST['email']); } ?>"/>
                        <input type="submit" name="inscription" value="S'inscrire" />
                        <?php
                        if(isset($_GET['reponse']))
                        {
                            echo '<p class="red">'.$_GET['reponse'].'</p>';
                        }
                        ?>
                    </form>
                    <ul id="reseaux">
                        <li>
                            <a class="facebook" href="https://www.facebook.com/pages/Atmosph%C3%A8re-Parigot/582962811819213" title="facebook" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a class="twitter" href="https://twitter.com/MadeInHome_3D" title="twitter" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a class="pinterest" href="http://fr.pinterest.com/atmospherep/" title="Pinterest" target="_blank">Pinterest</a>
                        </li>
                        <li>
                            <a class="google" href="https://www.facebook.com/pages/Made-In-Home/594813007248279" title="Google +" target="_blank">Google+</a>
                        </li>
                    </ul>
                </section>
                <footer>
                    <small>Copyright Atmospere Parigot &copy;</small>
                </footer>
            </section>
        </div> <!-- END DIV CONTENT -->
    </body>
</html>