<?php
$title="Atmosphère - Mon profil";
$description="Une petite description du lieu";

include("includes/header.php"); 
include("traitement/user.php");
?>
<!-- END header -->
<br>
<br>
<br>
<div>
    <h2>Mes infos</h2>
    <ul>
        <li>Username : <?php echo $_SESSION['username'] ;?></li>
        <li>Email : <?php echo $_SESSION['email']; ?></li>
    </ul>
<br>
<br>
<br>
    <h3>Modifier mes informations</h3>
    <br>
    <p>Modifier EMAIL</p>
    <p>Adresse email actuelle : <?php echo $_SESSION['email']; ?></p>
    <form name="ChangeMail" action="espace-user.php" method="post">
        <label>Nouvelle adresse email :</label>
        <input type="text" name="newMail" value="">
        <label>Confirmer la nouvelle adresse email :</label>
        <input type="text" name="confirmMail" value="">        
        <label>Mot de passe :</label>
        <input type="text" name="password" value="">
        <input type="hidden" name="id" value="<?php $_SESSION['id']; ?>">
        <input type="submit" name="saveMail" value="Enregistrer le mail">
    </form>
    <p style="color:red"><?php if(isset($messageMail)){echo $messageMail;} ?></p>
    <br>
    <br>
    <p>Modifier MOT DE PASSE</p>
    <form name="ChangePassword" action="espace-user.php" method="post">
        <label>Ancien mot de passe :</label>
        <input type="text" name="password" value="">
        <label>Nouveau mot de passe :</label>
        <input type="text" name="newPassword" value="">
        <input type="hidden" name="id" value="<?php $_SESSION['id']; ?>">
        <input type="submit" name="savePassword" value="Enregistrer MDP">    
    </form>
    <p style="color:red"><?php if(isset($messagePass)){echo $messagePass;} ?></p>
<br>
<br>
<br>
    <h3>Supprimer mon compte</h3>
    <form name="formDeleteUser" action="espace-user.php" method="post">
        <p>Pour supprimer votre compte, veuillez renseigner votre mot de passe. Votre compte sera définitivement supprimé.</p>
        <label>Mot de passe :</label>
        <input type="text" name="password" value="">
        <label>Confirmation du mot de passe :</label>
        <input type="text" name="confirmPassword" value="">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
        <input type="submit" name="deleteUser" value="Supprimer mon compte">    
    </form>

    <p style="color:red"><?php if(isset($message)){echo $message;} ?></p>
    <p style="color:blue"><?php if(isset($success)){echo $success;} ?></p>

</div>

<p><a href="index.php">Retour à l'accueil</a></p>

<!-- START Footer -->
<?php include("includes/footer.php"); ?>
<!-- END footer -->
