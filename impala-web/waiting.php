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
        <!-- START META FACEBOOK -->
        <meta property="og:title" content="Atmosphère Parigot" />
        <meta property="og:description" content="Atmosphère Parigot est une plateforme permettant de repérer des lieux exclusifs dans son arrondissement et selon ses envies de loisirs. Vous pourrez assister à des événements propres à vos intérêts culturels et échanger autour de vos passions tout en prenant un verre." />
        <meta property="og:image" content="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10413374_583242371791257_1288029036615216986_n.png?oh=50bce70f63fe97be415299e5c05303c1&oe=54195EC1&__gda__=1411915120_6b6417cebfba2d70fb455f5e25b6babe" />
        <meta property="og:type" content="website" />
        <meta property="og:updated_time" content="1403439485" />
        <meta property="og:url" content="http://www.atmosphere-parigot.fr/waiting.php" />
        <meta property="fb:profile_id" content="715431161853715" />
        <meta property="fb:admins" content="715431161853715" />
        <!-- END META FACEBOOK -->
        <!-- START META TWITTER -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@atmosthere_p">
        <meta name="twitter:title" content="Atmosphere Parigot !">
        <meta name="twitter:description" content="Le site référent pour sortir avec tes potes. Loupe pas le coche !">
        <meta name="twitter:creator" content="atmosphere_p">
        <meta name="twitter:image:src" content="http://atmosphere-parigot.fr/img/logo-atmosphere-twitter.png">
        <meta name="twitter:domain" content="atmosphere-parigot.fr">
        <!-- END META TWITTER -->
        <meta name="p:domain_verify" content="03ba9916ed1916299d8707ed7b2f964a"/>
        <link rel="stylesheet" href="stylesheets/screen.css">
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
        <link rel="icon" type="image/png" href="img/favicon.png"> 
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link href="//vjs.zencdn.net/4.6/video-js.css" rel="stylesheet">
        <script src="//vjs.zencdn.net/4.6/video.js"></script>
    </head>
    <body role="document">
        <div id="waiting">    
        	<section id="content">
                <header>
                  <h1><img src="img/logo-atmosphere-loading-page.png" alt="Atmosphère Parigot"/>Atmosphère Parigot</h1>
                </header>   
                <section id="waiting-content">
                    <h2>Inscris-toi à l’événement ! </h2>
                    <p>En 10 secondes rafle ta place pour le premier événement organisé par Atmosphère Parigot. Loupe pas le coche !</p>
                    <form name="formWaiting" method="post" action="traitement/newsletter.php">
                       
                    <label for="email">Courriel</label>
                       <input id="email" type="email" name="email" placeholder="loulou@courriel.com" value="<?php if (isset($_POST['email'])){ echo htmlspecialchars($_POST['email']); } ?>"/>
                        <?php
                        if(isset($_GET['reponse']))
                        {
                            echo '<label>'.$_GET['reponse'].'</label>';
                        }
                        ?>
                        <input type="submit" name="inscription" value="Je m'inscris" />
                        
                    </form>
                    <h3>Suivez-nous sur :</h3>
                    <ul id="reseaux">
                        <li>
                            <a class="facebook" href="https://www.facebook.com/pages/Atmosph%C3%A8re-Parigot/582962811819213" title="facebook" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a class="twitter" href="https://twitter.com/atmosphere_p" title="twitter" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a class="pinterest" href="http://fr.pinterest.com/atmospherep/" title="Pinterest" target="_blank">Pinterest</a>
                        </li>
                        <li>
                            <a class="google" href="https://plus.google.com/108575041726592154267" rel="publisher" title="Google +" target="_blank">Google+</a>
                        </li>
                    </ul>
                </section>
                <footer>
                    <small>Copyright Atmosphere Parigot &copy;</small>
                </footer>
            </section>
        </div> <!-- END DIV CONTENT -->
    </body>
</html>