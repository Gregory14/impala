<?php 
$title="Atmosphère - Evenements";
$description="Tous les événements les plus improbables. Rencontrez de nouvelles personnes, partagez vos connaissances et expériences et découvrez de nouveaux lieux.";

include("includes/header.php") 
;?>
        <h2>Nos événements</h2>
        <section id="events-content" class="container">
            <div id="filters">
                <ul class="list-inline">
                    <li class="filter" data-filter="all">TOUS</li>
                    <li class="filter" data-filter="nineteenth">19ème</li>
                    <li class="filter" data-filter="twentieth">20ème</li>
                </ul>
            </div>
            <div id="Container" class="all-thumbnails">
                <ul>
                    <?php
                        $req=$mysql->prepare('SELECT * FROM events');
                        $req->execute();

                        while($donnees=$req->fetch()){?>
                        <li class="mix all <?php echo $donnees['arrondissement']; ?>">
                            <h3><a href="fiche-event.php?id=<?php echo $donnees['id']; ?>"><?php echo $donnees['title']; ?></a></h3>
                            <p class="tag"><?php echo $donnees['tag']; ?></p>
                            <a href="fiche-event.php?id=<?php echo $donnees['id']; ?>">
                                <img src="img/content/evenements/test.jpg" alt="visuel de l'événement" />
                            </a>
                            <p class="description">
                                <?php 
                            // Limiter le nombre de caracteres visible
                            if (strlen($donnees['description'])>100) {
                                $donnees['description']=substr($donnees['description'], 0, 100);
                                $dernier_mot=strrpos($donnees['description']," ");
                                $donnees['description']=substr($donnees['description'],0,$dernier_mot);
                                // AJOUTER ... a la fin de la description
                                $donnees['description'].=" ...";
                                echo $donnees['description'];

                            }
                            ?>
                            </p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <script type="text/javascript">
        //Filtres et Tri
                $(function(){
                    $('#Container').mixItUp();
                });
        </script>
<?php include("includes/footer.php"); ?>