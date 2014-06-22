<?php 
$title="Atmosphère - Evenements";
$description="Tous les événements les plus improbables. Rencontrez de nouvelles personnes, partagez vos connaissances et expériences et découvrez de nouveaux lieux.";

include("includes/header.php") 
;?>
        <h2>Nos événements</h2>
        <section id="events-content">
            <div id="filters">
                <ul>
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter="nineteenth">19ème</li>
                    <li class="filter" data-filter="twentieth">20ème</li>
                </ul>
            </div>
            <div id="all-events">
                <ul>
                    <?php
                        $req=$mysql->prepare('SELECT * FROM events');
                        $req->execute();

                        while($donnees=$req->fetch()){?>
                        <li>
                            <h3><a href="fiche-event.php?id=<?php echo $donnees['id']; ?>"><?php echo $donnees['title']; ?></a></h3>
                            <p class="tag"><?php echo $donnees['tag']; ?></p>
                            <a href="fiche-event.php?id=<?php echo $donnees['id']; ?>"><img src="#" alt="visuel de l'événement" /></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
<?php include("includes/footer.php"); ?>