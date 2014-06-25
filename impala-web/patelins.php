<?php 
$title="Atmosphère - Patelins";
$description="Atmosphère vous propose de découvrir une liste de lieux exclusifs.";

include("includes/header.php")
;?>
        <h2>Nos patelins</h2>
        <section id="places-content">
            <div class="filters">
                <ul>
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter="nineteenth">19ème</li>
                    <li class="filter" data-filter="twentieth">20ème</li>
                </ul>
            </div>
            <div class="all-thumbnails">
                <ul>
                    <li>
                        <h3><a href="fiche-lieu.php">Lieu 1</a></h3>
                        <p class="tag">Bar</p>
                        <a href="fiche-lieu.php"><img src="#" alt="visuel de l'événement" /></a>
                        <p class="description">On va souvent ici pour se bidonner entre potes, pour tailler une bavette. Y’a une bonne ambiance, avec une équipe de titis pleins d’énergies...</p>
                    </li>
                </ul>
            </div>
        </section>
<?php include("includes/footer.php"); ?>