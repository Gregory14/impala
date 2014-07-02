<?php session_start();

include_once("includes/config.php");
include("traitement/deconnexion.php");

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 is-ie-7" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 is-ie8" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--START Meta Facebook-->
        <meta property="og:title" content="Atmosphère Parigot" />
        <meta property="og:description" content="Atmosphère Parigot est une plateforme permettant de repérer des lieux exclusifs dans son arrondissement et selon ses envies de loisirs. Vous pourrez assister à des événements propres à vos intérêts culturels et échanger autour de vos passions tout en prenant un verre." />
        <meta property="og:image" content="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10413374_583242371791257_1288029036615216986_n.png?oh=50bce70f63fe97be415299e5c05303c1&oe=54195EC1&__gda__=1411915120_6b6417cebfba2d70fb455f5e25b6babe" />
        <meta property="og:type" content="website" />
        <meta property="og:updated_time" content="1403439485" />
        <meta property="og:url" content="http://www.atmosphere-parigot.fr/waiting.php" />
        <meta property="fb:profile_id" content="715431161853715" />
        <meta property="fb:admins" content="715431161853715" />
        <!--END Meta Facebook-->
        <!--START Meta Twitter-->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@atmosthere_p">
        <meta name="twitter:title" content="Atmosphere Parigot !">
        <meta name="twitter:description" content="Le site référent pour sortir avec tes potes. Loupe pas le coche !">
        <meta name="twitter:creator" content="atmosphere_p">
        <meta name="twitter:image:src" content="http://atmosphere-parigot.fr/img/logo-atmosphere-twitter.png">
        <meta name="twitter:domain" content="atmosphere-parigot.fr">
        <!--END Meta Twitter-->
        <meta name="p:domain_verify" content="03ba9916ed1916299d8707ed7b2f964a"/>
        <!--CSS files-->
        <link rel="stylesheet" href="stylesheets/screen.css" />
        <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css" />
        <link rel="stylesheet" href="//vjs.zencdn.net/4.6/video-js.css" />        
        <!--JS files-->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
        <script src="//vjs.zencdn.net/4.6/video.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <!--Favicon-->
        <link rel="icon" type="image/png" href="img/favicon.png"> 
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body role="document">
        <?php include_once("traitement/analyticstracking.php");?>
        <!-- API Facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=427630174044778&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="head">
            <header role="banner" class="container">
                <div id="logo" class="inline-block">
                    <a href="index.php" rel="home"><h1>Atmosphère-Parigot</h1></a>
                </div>
                <nav id="main-menu" role="navigation" class="inline-block">
                    <ul class="list-inline">
                        <li><a href="evenements.php" title="Tous nos événements">Événements</a>
                        </li><li><a href="patelins.php" title="Tous nos patelins">Gourbis</a>
                        </li><li><a href="atmosphere.php" title="Notre équipe">La clique</a>
                        </li>
                    </ul>
                </nav>
                <div id="login" class="inline-block">
                <?php 
                    if(isset($_SESSION['connect'])){
                ?>
                    <ul id="user-connect" class="list-inline">
                        <li>
                            <a href="user-profil.php" class="active">Mon profil</a>
                        </li>
                        <li>
                            <form name="formDeconnect" action="index.php" method="post">
                                <input type="submit" name="deconnect" value="Déconnexion">
                             </form>
                        </li>    
                    </ul>
                <?php
                }else{
                ?>
                    <ul class="list-inline">
                        <li>
                            <a href="inscription.php" class="active">Je m'inscris</a>
                        </li><li>
                            <a href="connexion.php">J'me connecte</a>
                        </li>
                    </ul>
                <?php
                }
                ?>
                </div>
                <div id="mytickets" class="inline-block">
                    <p><a href="espace-tickets.php" title="Voir mes tickets réservés">Mes tickets</a></p>
                    <?php 
                        //Afficher une notification lorsqu'un article est ajouté
                        if(isset($_SESSION['amount'])){
                        ?>
                            <p id="notif"><?php echo $_SESSION['amount']; ?></p>
                        <?php }
                    ?></p>
                </div>
            </header>
        </div>
        <section id="main">
