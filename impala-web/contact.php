<?php 
$title="Atmosphère - Contact";
$description="Atmosphère vous propose de partager vos envies à travers la découverte de nouveaux lieux dans Paris. Architecture, bar, restaurant, visites culturelles… Atmosphère vous propose de regarder votre environnement d'un nouvel oeil.";

include("includes/header.php"); 
?>
        <h2>Nous contacter</h2>
        <p>Un détail vous tracasse ? Besoin d'une réponse dans votre tête de pioche tout de suite maintenant ? Alors remplissez le formulaire ci-dessous. On essayera de vous répondre au plus vite.</p>
        <p>Tous les champs sont obligatoires.</p>

        <form name="formContactUs" action="" method="post">
            <label for="subject">Sujet</label>
                <input id="subject" name="subject" required tabindex="1" value="">
            <label for="name">Blaze
                <input id="name" name="name" required tabindex="2" value="">
            </label>
            <label for="email">Courriel
                <input id="email" name="email" required tabindex="3" value="">
            </label>
            <label for="message">Votre message</label>
                <textarea id="message" name="message" tabindex="4" required value=""></textarea>
            <input name="send" type="submit" value="Envoyer le message" class="button" />
        </form>

<?php include("includes/footer.php"); ?>