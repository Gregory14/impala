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
        <section class="container">
            <p><a href="patelins.php" class="back" title="retour à tous les lieux"><</a></p>
            <div class="fiche-content">
                <div class="fiche-title">
                    <h2><?php echo $donnees['title']; ?></h2>
                    <p class="tag"><?php echo $donnees['tag'] ;?></p>
                </div>
                <div class="informations">
                    <ul>
                        <li class="address"><?php echo $donnees['address'] ;?></li>
                        <li class="transport"><?php echo $donnees['transport'] ;?></li>
                        <li><?php echo $donnees['price'];?>€</li>
                        <li class="time">Horaires</li>
                        <li class="telephone"><?php echo $donnees['telephone'] ;?></li>
                        <li class="website"><?php echo $donnees['website'] ;?></li>
                    </ul>
                </div>
                <a href="#" class="button share">Partager sur Facebook</a>
                <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-type="button"></div>
                <div class="fiche-description">
                    <h3>P'tite description</h3>
                    <p><?php echo $donnees['description'] ;?></p>
                </div>
                <div class="pictures">
                    <img src="<?php echo $donnees['bigimage']; ?>" alt="visuel du lieu <?php echo $donnees['title']; ?>">
                </div>
                <a href="fiche-event.php?id=1" class="button">Voir l'événement</a>
            </div>
        </section>
<?php include("includes/footer.php"); ?>