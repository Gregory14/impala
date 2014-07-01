<?php 
$title="Atmosphère - Fiche événement";
$description="Une petite description du lieu";

include("includes/header.php");

    if(isset($_GET['id'])){
        $id=htmlspecialchars($_GET['id']);

        $req=$mysql->prepare('SELECT * FROM events WHERE id=:id');
        $req->execute(array(':id'=>$id));

        $donnees=$req->fetch();
    }
    if(isset($_SESSION['panier'])){
        echo '<strong style="color:red;">VOTRE TICKET A BIEN ETE AJOUTE A VOTRE PANIER</strong>';
    }
?>
        <section class="container">
            <p><a href="evenements.php" class="back" title="retour à tous les évènements"><</a></p>
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
                        <li class="time">Horaires</li>
                        <li class="telephone"><?php echo $donnees['telephone'] ;?></li>
                        <li class="website"><?php echo $donnees['website'] ;?></li>
                    </ul>
                </div>
                <a href="#" class="button share">Partager sur Facebook</a>
                <div class="fiche-description">
                    <h3>P'tite description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mattis tincidunt. Morbi congue nisl in mollis cursus. Nunc rutrum euismod aliquam. Nulla lobortis mauris odio, non iaculis orci porttitor ut. Donec a hendrerit nisl. Nulla quis est id libero vestibulum rutrum.</p>
                </div>
                <div class="pictures">
                    <img src="<?php echo $donnees['bigimage']; ?>" alt="visuel du lieu <?php echo $donnees['title']; ?>">
                </div>
                <ul>
                    <li><a href="traitement/panier.php?id=<?php echo $donnees['id']; ?>" class="button">Ajouter à mes tickets</a></li>
                    <li><a href="#" class="button">Achat rapide</a></li>
                </ul>
            </div>
        </section>
<?php include("includes/footer.php"); ?>