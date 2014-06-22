<?php include("includes/header.php"); ?>
<!-- END header -->

<?php
    //$id = 1;
    
    if(isset($_GET['id'])){
        $id=htmlspecialchars($_GET['id']);

        $req=$mysql->prepare('SELECT * FROM events WHERE id=:id');
        $req->execute(array(':id'=>$id));

        $donnees=$req->fetch();
    }
    if(isset($_SESSION['panier'])){
        echo "votre place a bien été ajoutée au panier";
        var_dump($_SESSION['panier']);
    }
?>


<p><a href="evenements.php">Retour à tous les events</a></p>
<br>
<br>
<div class="evenement" id="<?php $id ?>">
    <p><?php echo $donnees['title']; ?></p>
    <p><a href="traitement/panier.php?id=<?php echo $donnees['id']; ?>">Acheter une place</a></p>    
</div>


<!-- START Footer -->
<?php include("includes/footer.php"); ?>
<!-- END footer -->
