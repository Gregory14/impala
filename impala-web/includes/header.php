<?php 
session_start();

include("includes/config.php");
include_once("traitement/analyticstracking.php");
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
        <!-- END Meta Facebook-->
        <!--CSS files-->
        <link rel="stylesheet" href="stylesheets/screen.css">
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />
        <!--JS files-->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
        <!--Favicon-->
        <link rel="icon" type="image/png" href="img/favicon/favicon.png"> 
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon/favicon.ico">
    </head>
    <body role="document">
        <header role="banner container">
            <div id="logo">
                <h1><a href="index.php" rel="home">Atmosphère-Parigot</a></h1>
            </div>
            <nav id="main-menu" role="navigation">
                <ul>
                    <li><a href="index.php" rel="home" class="is-active">Home</a>
                    </li><li><a href="evenements.php" title="Tous nos événements">Évènements</a>
                    </li><li><a href="patelins.php" title="Tous nos patelins">Patelins</a>
                    </li><li><a href="atmosphere.php" title="Notre équipe">La clique</a>
                    </li><li><a href="contact.php" title="Nous contacter">Contact</a>
                    </li>
                </ul>
            </nav>
            <div id="login">
            <?php 
                if(isset($_SESSION['connect'])){
            ?>
                <ul id="user-connect">
                    <li>
                        <a href="user-profil.php">Mon profil</a>
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
                <ul>
                    <li>
                        <a href="inscription.php">Je m'inscris</a>
                    </li>
                    <li>
                        <a href="connexion.php">J'me connecte</a>
                    </li>
                </ul>
            <?php
            }
            ?>
            </div>
            <div id="mytickets">
                <p><a href="espace-tickets.php">Mes tickets</a></p>
            </div>
            <div id="search">
                <p><a href="#">Recherche</a></p>
            </div>
        </header>
        <section id="main">
