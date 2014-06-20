<?php    
  // header('Status: 301 Moved Permanently', false, 301);      
  // header('Location: waiting.php');      
  // exit();      
?>
<?php
session_start();
include_once("traitement/analyticstracking.php");
include('traitement/deconnexion.php');
?>

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
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
    </head>
    <body role="document">

        <header id="header" role="banner">
            <div class="wrapper">
                <a id="logo" href="index.php" rel="home">Atmosphère</a>
            </div>

            <nav id="nav" role="navigation">
                <ul class="wrapper">
                    <li>
                        <a href="index.php" rel="home" class="is-active">Home</a>
                    </li><li>
                        <a href="evenements.php">Évènements</a>
                    </li><li>
                        <a href="lieux.php">Lieux</a>
                    </li><li>
                        <a href="atmosphere.php">Concept</a>
                    </li><li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <form action="#">
                            <input type="search" name="search" />
                        </form>
                    </li>
                </ul>
            </nav>
            
            <div id="login">
            <?php 
                if(isset($_SESSION['connect'])){
            ?>
                <ul>
                    <li><a href="espace-user.php">Mon espace</a></li>
                    <form name="formDeconnect" action="index.php" method="post">
                        <input type="submit" name="deconnect" value="Déconnexion">
                     </form>
                </ul>
            <?php
            }else{
            ?>
                <ul>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            <?php
            }
            ?>
            </div>
        </header>
        <div id="content">
            <section>
