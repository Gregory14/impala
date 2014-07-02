<?php 
$title="Atmosphère - Fiche événement";
$description="Découvrez des lieux sous un autre angle, dans une atmosphère particulière par le biais d’événements organisés tout spécialement pour vous.";

include("includes/header.php");

    if(isset($_GET['id'])){
        $id=htmlspecialchars($_GET['id']);

        $req=$mysql->prepare('SELECT * FROM events WHERE id=:id');
        $req->execute(array(':id'=>$id));

        $donnees=$req->fetch();
    }
    // if(isset($_SESSION['panier'])){
    //     echo '<strong style="color:red;">VOTRE TICKET A BIEN ETE AJOUTE A VOTRE PANIER</strong>';
    // }
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
                        <li class="time"><?php echo $donnees['date'];?></li>
                        <li class="telephone"><?php echo $donnees['telephone'] ;?></li>
                        <li class="website"><?php echo $donnees['website'] ;?></li>
                    </ul>
                </div>
                <div class="fb-share-button" data-href="http://www.atmosphere-parigot.fr/fiche-event.php?id=<?php $_GET['id']?>" data-type="button"></div>
                <div class="fiche-description">
                    <h3>P'tite description</h3>
                    <p><?php echo $donnees['description'] ;?></p>
                </div>
                <div class="pictures">
                    <img src="<?php echo $donnees['bigimage']; ?>" alt="visuel du lieu <?php echo $donnees['title']; ?>">
                </div>
                <div id="buyTicket">
                    <h3>C'est simple comme bonjour : réserver en 4 étapes !</h3>
                    <ul>
                         <li>
                            <p>Évènement</p>
                            <p><?php echo $donnees['title']; ?></p>
                         </li>
                         <li>
                            <p>Tarif</p>
                            <p><?php echo $donnees['price']; ?>€</p>
                         </li>
                         <li>
                            <p>Nombre de place</p>
                            <select name="nbrTicket" id="nbrTicket">
                                <?php for($i=1; $i < 2; $i++){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i ;?></option>
                                <?php
                                };?>
                            </select>
                         </li>
                     </ul> 
                </div>
                <ul class="addTicket">
                    <li><a href="traitement/panier.php?id=<?php echo $donnees['id']; ?>" class="button">Ajouter à mes tickets</a></li>
                    <!-- <li><a href="#" class="button">Achat rapide</a></li> -->
                </ul>
            </div>
        </section>
<?php include("includes/footer.php"); ?>