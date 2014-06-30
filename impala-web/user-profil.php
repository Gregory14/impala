<?php
$title="Atmosphère - Mon profil";
$description="Une petite description du lieu";

include("includes/header.php"); 
include("traitement/user.php");
?>
        <h2>C’est ici qu’tu peux voir et modifier tes informations</h2>
        <section id="user-content" class="container">
            <div id="user-infos">
                <h3>Mes informations personnelles</h3>
                <div class="inline-block">
                    <h4>Modifier mon email</h4>
                    <p>Adresse email actuelle : <?php echo $_SESSION['email']; ?></p>
                    <form name="ChangeMail" action="user-profil.php" method="post">
                        <label for="newMail">Nouvelle adresse email :
                            <input id="newMail" type="text" name="newMail" tabindex="1" value="">
                        </label>
                        <label for="confirmMail">Confirmer la nouvelle adresse email :</label>
                            <input id="confirmMail" type="text" name="confirmMail" tabindex="2" value="">
                        <label for="password">Mot de passe :</label>
                            <input id="password" type="text" name="password" tabindex="3" value="">
                        <input type="hidden" name="id" value="<?php $_SESSION['id']; ?>">
                        <input type="submit" name="saveMail" class="button" value="Enregistrer le mail">
                    </form>
                    <p><?php if(isset($messageMail)){echo $messageMail;} ?></p>
                </div>
                <div class="inline-block">
                    <h4>Modifier mon mot de passe</h4>
                    <form name="ChangePassword" action="user-profil.php" method="post">
                        <label for="oldPass">Ancien mot de passe :</label>
                            <input id="oldPass" type="text" name="password" tabindex="4" value="">
                        <label for="newPass">Nouveau mot de passe :</label>
                            <input id="newPass" type="text" name="newPassword" tabindex="5" value="">
                        <input type="hidden" name="id" value="<?php $_SESSION['id']; ?>">
                        <input type="submit" name="savePassword" class="button" value="Enregistrer MDP">    
                    </form>
                    <p style="color:red"><?php if(isset($messagePass)){echo $messagePass;} ?></p>
                </div>
                <div class="inline-block">
                    <h4>Supprimer mon compte</h4>
                    <p>Pour supprimer votre compte, veuillez renseigner votre mot de passe. Votre compte sera définitivement supprimé.</p>
                    <form name="formDeleteUser" action="user-profil.php" method="post">
                        <label for="pass">Mot de passe :</label>
                            <input id="pass" type="text" name="password" required tabindex="6" value="">
                        <label for="confirm">Confirmation du mot de passe :</label>
                        <input id="confirm" type="text" required name="confirmPassword" tabindex="7" value="">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                        <input type="submit" name="deleteUser" class="button" value="Supprimer mon compte">    
                    </form>
                </div>
            </div>
            <div id="user-orders">
                <h3>Toutes mes commandes</h3>
                <p>T’as pas encore passé de commande gamin, grouille toi !</p>
            </div>
        </section>
<?php include("includes/footer.php"); ?>