<?php
$title="Atmosphère - Lieu 1";
$description="Une petite description du lieu";

include("includes/header.php");


    if(isset($_GET['id'])){
        $id=htmlspecialchars($_GET['id']);

        $req=$mysql->prepare('SELECT * FROM places WHERE id=:id');
        $req->execute(array(':id'=>$id));

        $donnees=$req->fetch();
    }
?>
        <section class="fiche-content container">
            <p><a href="patelins.php">Retour à tous les patelins</a></p>
            <div class="fiche-title">
                <h2><?php echo $donnees['title']; ?></h2>
                <p class="tag"><?php echo $donnees['tag'] ;?></p>
            </div>
            <div class="informations">
                <ul>
                    <li><?php echo $donnees['address'] ;?></li>
                    <li><?php echo $donnees['transport'] ;?></li>
                    <li><?php echo $donnees['price'];?>€</li>
                </ul>
                <ul>
                    <li>Horaires</li>
                    <li><?php echo $donnees['telephone'] ;?></li>
                    <li><?php echo $donnees['website'] ;?></li>
                </ul>
            </div>
            <a href="#" class="button share">Partager sur Facebook</a>
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-type="button"></div>
            <div class="fiche-description">
                <h3>P'tite description</h3>
                <p><?php echo $donnees['description'] ;?></p>
            </div>
            <div class="pictures">
                <p>Ici le slider</p>
            </div>
            <a href="fiche-event.php?id=1" class="button">Voir l'événement</a>
        </section>
<?php include("includes/footer.php"); ?>