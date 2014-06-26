<?php
session_start();

if(isset($_GET['id'])) {
    $id_article=$_GET['id'];

    $_SESSION['panier'][]= $id_article;

    header('location: ../fiche-event.php?id='.$_GET['id']);
} 
else{
    header('location: /index.php');
}

?>