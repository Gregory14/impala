<?php
$title="Atmosphère - Theme";
$description="Une petite description du lieu";

include("includes/header.php");
?>
        <h2>Là ou ça s'trouve</h2>
        <section id="theme-content" class="container">
            <div id="map">
                <p>Code GREG ici</p>
            </div>
            <h3>P'tite description de tes futurs patelins</h3>
            
            <?php            

                //-- AFFICHER TOUS LES LIEUX ASSOCIES AU CHOIX UTILISATEUR (arrondissement+theme) --//
                if(isset($_GET['arr'])){

                    //Récupération du choix de l'arrondissement + thème 
                    $arrondissement = $_GET['arr'];
                    $theme = $_GET['theme'];

                    //Récupérer les lieux associés à cet arrondissement et à ce thème
                    $req=$mysql->prepare('SELECT * FROM places WHERE arrondissement=:arrondissement AND theme=:theme');
                    $req->execute(
                        array(
                            ':arrondissement' => $arrondissement,
                            ':theme' => $theme
                        )
                    );

                    while ($donnees=$req->fetch()){ ?>
                        <div class="place-thumbnail">
                            <img src="" alt="visuel du lieu">
                            <div class="title-place">
                                <h4><span>1</span><?php echo $donnees['title']; ?></h4>
                            </div>
                            <?php if(!empty($donnees['event'])){ ?>
                            <div class="event-place">
                                <time><?php echo $donnees['date']; ?></time>
                                <h4><?php echo $donnees['event']; ?></h4>
                                <a href="fiche-event.php?id=1" class="button">Voir l'événement</a>
                            </div>
                            <?php } ?>
                            <div class="description-place">
                                <div class="inline-block">
                                    <p><?php echo $donnees['description']; ?></p>
                                    <a href="#" class="button">Partager sur Facebook</a>
                                </div><div class="inline-block informations">
                                    <ul>
                                        <li class="address"><?php echo $donnees['address']; ?></li>
                                        <li class="address">Horaires</li>
                                        <li class="website"><?php echo $donnees['website']; ?></li>
                                        <li class="telephone"><?php echo $donnees['telephone']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }//fin while 
                }//fin isset ?>        
        </section>
        <script src="js/map.js"></script>
<?php include("includes/footer.php"); ?>