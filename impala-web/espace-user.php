<?php 
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

    <h3>Modifier mes informations</h3>
    <form name="formChangeUser" action="espace-user.php" method="post">
        <label>Username :</label>
        <input type="text" name="username" placeholder="<?php echo $_SESSION['username']; ?>" value="">
        <label>Email :</label>
        <input type="text" name="email" placeholder="<?php echo $_SESSION['email']; ?>">
        <label>Ancien mot de passe :</label>
        <input type="text" name="password" value="">
        <label>Nouveau mot de passe :</label>
        <input type="text" name="newPassword" value="">
        <input type="hidden" name="id" value="<?php $_SESSION['id']; ?>">
        <input type="submit" name="saveUser" value="Sauvegarder les informations">    
    </form>

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
