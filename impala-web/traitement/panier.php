<?php session_start();


//Ajout d'un ticket (article) dans le panier
if(isset($_GET['id'])) {
    $id_article=$_GET['id'];

    //Gestion de la quantité
    if(array_key_exists($id_article, $_SESSION['panier'])) {
        $_SESSION['panier'][$id_article] += 1;
    } else {
        $_SESSION['panier'][$id_article] = 1;
    }
    //redirection
    header('location: ../fiche-event.php?id='.$_GET['id']);
} 
else{
    header('location: /index.php');
}

?>