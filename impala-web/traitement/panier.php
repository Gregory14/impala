<?php
if(isset($_GET['id'])) {
    // var_dump($_GET['id']);
    $_SESSION['panier'][] = $_GET['id'];
    var_dump($_SESSION['panier']);

    if(isset($_SESSION['panier'])){
        echo 'ici la session est détectée';
    }
    //header('location: place.php');
    header('location: ../fiche-event.php?id='.$_GET['id']);
    //header('location: /confirmation.php?id=1');
} else {
    header('location: /index.php');
}

?>

<a href="../evenements.php">Retour</a>