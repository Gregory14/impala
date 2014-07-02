<?php
$title="Atmosphère - Inscription";
$description="Inscrivez-vous sur le site d’Atmosphère-Parigot afin de profiter pleinement de nos services. Réservez vos places directement en ligne et soyez au courant des derniers événements.";

include("includes/header.php");
include('traitement/register.php');
?>
        <h2>Inscrivez-vous, c'est gratuit !</h2>
        <section id="inscription-content" class="container">
            <div class="form-content">
                <p>Remplissez les champs suivants pour une inscription rapide en 30 secondes maximum !</p>
                <p class="alerts">
                    <?php if(isset($message)){echo '<p class="alert-error ">'.$message.'</p>';} ?>
                    <?php if(isset($success)){echo '<p class="alert-success ">'.$success.'</p>';} ?>
                </p>
                <form name="formRegistration" action ="./inscription.php" method="post">
                    <label for="username">Blaze d'utilisateur
                        <input id="username" type="text" name="username" required tabindex="1" value="">
                    </label>
                    <label for="email">Courriel
                        <input id="email" type="email" name="email" required tabindex="2" value="">
                    </label>
                    <label for="password">Mot de passe
                        <input id="password" type="password" name="password" required tabindex="3" value="">
                    </label>
                    <input type="submit" name="register" class="button" value="S'inscrire">
                </form>
                <p>En cliquant sur le bouton "Créer mon compte", l'utilisateur déclare accepter les conditions générales et <a href="mentions.php">mentions légales</a>.</p>
            </div>
        </section>
<?php include("includes/footer.php"); ?>