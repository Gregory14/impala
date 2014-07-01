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
            <div class="place-thumbnail">
                <img src="#" alt="visuel du lieu">
                <div class="title-place">
                    <h4><span>1</span> La Rotonde</h4>
                </div>
                <div class="event-place">
                    <time>20/06/2014</time>
                    <h4>Titre de l'événement</h4>
                    <a href="fiche-event.php?id=1" class="button">Voir l'événement</a>
                </div>
                <div class="description-place">
                    <div class="inline-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mattis tincidunt. Morbi congue nisl in mollis cursus. Nunc rutrum euismod aliquam. Nulla lobortis mauris odio, non iaculis orci porttitor ut. Donec a hendrerit nisl. Nulla quis est id libero vestibulum rutrum.</p>
                        <a href="#" class="button">Partager sur Facebook</a>
                    </div><div class="inline-block informations">
                        <ul>
                            <li class="address">Adresse</li>
                            <li class="address">Horaires</li>
                            <li>Site web</li>
                        </ul>
                        <ul>
                            <li>Téléphone</li>
                            <li>Email</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/map.js"></script>
<?php include("includes/footer.php"); ?>