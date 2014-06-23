<?php
$title="Atmosphère - Inscription";
$description="Une petite description du lieu";

include("includes/header.php");
include('traitement/register.php');
?>
        <h2>Inscrivez-vous. C'est gratuit !</h2>
        <section id="inscription-content" class="form-content">
            <p>Remplissez les champs suivants pour une inscription rapide en 30 secondes maximum !</p>
            <p class="alerts">
                <?php if(isset($message)){echo '<p>'.$message.'</p>';} ?>
                <?php if(isset($success)){echo '<p>'.$success.'</p>';} ?>
            </p>
            <form name="formRegistration" action ="./inscription.php" method="post">
                <label for="username">Username</label>
                    <input id="username" type="text" name="username" required tabindex="1" value="">
                <label for="email">Email</label>
                    <input id="email" type="email" name="email" required tabindex="2" value="">
                <label for="password">Mot de passe</label>
                    <input id="password" type="text" name="password" required tabindex="3" value="">
                <input type="submit" name="register" class="button" value="S'inscrire">
            </form>
            <p>En cliquant sur le bouton "Créer mon compte", l'utilisateur déclare accepter les conditions générales et <a href="mentions.php">mentions générales</a>.</p>
        </section>
<?php include("includes/footer.php"); ?> 

