<?php
session_start();

if(isset($_GET['id'])) {
    $id_article=$_GET['id'];

    if(array_key_exists($id_article, $_SESSION['panier'])) {
        $_SESSION['panier'][$id_article] += 1;
    } else {
        $_SESSION['panier'][$id_article] = 1;
    }

    header('location: ../fiche-event.php?id='.$_GET['id']);
} 
else{
    header('location: /index.php');
}

?>