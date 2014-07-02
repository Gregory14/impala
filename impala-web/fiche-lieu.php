<?php
$title="Atmosphère - Lieu 1";
$description="Découvrez des lieux sous un autre angle, dans une atmosphère particulière.";

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
                        <li class="price"><?php echo $donnees['price'];?>€</li>
                        <li class="time"><?php echo $donnees['time'];?></li>
                        <li class="telephone"><?php echo $donnees['telephone'] ;?></li>
                        <li class="website"><?php echo $donnees['website'] ;?></li>
                    </ul>
                </div>
                <div class="fb-share-button" data-href="http://www.atmosphere-parigot.fr/fiche-lieu.php?id=<?php $_GET['id']?>" data-type="button"></div>
                <div class="fiche-description">
                    <h3>P'tite description</h3>
                    <p><?php echo $donnees['description'] ;?></p>
                </div>
                <div class="pictures">
                    <img src="<?php echo $donnees['bigimage']; ?>" alt="visuel du lieu <?php echo $donnees['title']; ?>">
                </div>
                <?php if(!empty($donnees['event'])) { ?>
                <a href="fiche-event.php?id=<?php echo $donnees['idevent']; ?>" class="button">Voir l'événement</a>
                <?php }?>
            </div>
        </section>
<?php include("includes/footer.php"); ?>