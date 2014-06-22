<?php
$title="Atmosphère - Lieu 1";
$description="Une petite description du lieu";

include("includes/header.php");
?>
       <section class="fiche-content">
            <p><a href="patelins.php">Retour à tous les patelins</a></p>
            <div class="fiche-title">
                <h2>Le titre du lieu</h2>
                <p class="tag">Bar</p>
            </div>
            <div class="informations">
                <ul>
                    <li>Adresse</li>
                    <li>Transport</li>
                    <li>Prix</li>
                    <li>Horaires</li>
                    <li>Téléphone</li>
                    <li>Site web</li>
                </ul>
            </div>
            <a href="#" class="button">Partager sur Facebook</a>
            <div class="fiche-description">
                <h3>P'tite description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mattis tincidunt. Morbi congue nisl in mollis cursus. Nunc rutrum euismod aliquam. Nulla lobortis mauris odio, non iaculis orci porttitor ut. Donec a hendrerit nisl. Nulla quis est id libero vestibulum rutrum.</p>
            </div>
            <div class="pictures">
                <p>Ici le slider</p>
            </div>
            <a href="fiche-event.php?id=1" class="button">Voir l'événement</a>
        </section>
<?php include("includes/footer.php"); ?>