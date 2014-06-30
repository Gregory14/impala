<?php 
$title="Atmosphère - Contact";
$description="Atmosphère vous propose de partager vos envies à travers la découverte de nouveaux lieux dans Paris. Architecture, bar, restaurant, visites culturelles… Atmosphère vous propose de regarder votre environnement d'un nouvel oeil.";

include("includes/header.php");
?>
        <h2>Formulaire de contact</h2>
        <section id="contact-content" class="container">
            <div class="form-content">
                <p>Un détail vous tracasse ? Besoin d'une réponse dans votre tête de pioche tout de suite maintenant ? Alors remplissez le formulaire ci-dessous. On essayera de vous répondre au plus vite.</p>
                <p>Tous les champs sont obligatoires.</p>
                <?php 
                    if (isset($_GET['subject']) || isset($_GET['name']) || isset($_GET['email']) || isset($_GET['message'])){
                        echo "<p class='alert-error'> Y t'manques des cases mon Loulou. </p>";
                    }
                    elseif (isset($_GET['sended'])) {
                        echo "<p class='alert-success'> Ton courriel est bien parti. </p>";
                    }
                ?>

                <form name="formContactUs" action="traitement/newsletter.php" method="post">
                    <label for="subject">Sujet
                        <input id="subject" name="subject" type="text" required tabindex="1" value="">
                    </label>
                    <label for="name" class="inline-block">Blaze
                        <input id="name" name="name" type="text" required tabindex="2" value="">
                    </label>
                    <label for="email" class="inline-block">Courriel
                        <input id="email" name="email" type="text" required tabindex="3" value="">
                    </label>
                    <label for="message">Message
                        <textarea id="message" name="message" tabindex="4" required value=""></textarea>
                    </label>
                    <input name="send" type="submit" value="Envoyer le message" class="button" />
                </form>
            </div>
        </section>

<?php include("includes/footer.php"); ?>