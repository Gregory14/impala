<?php 
    include('traitement/register.php');
?>

<div>
    <form name="formRegistration" action ="./inscription.php" method="post">
        <label>Username</label>
            <input type="text" name="username" value="">
        <label>Email</label>
            <input type="email" name="email" value="">
        <label>Mot de passe</label>
            <input type="text" name="password" value="">
        <input type="submit" name="register" value="S'inscrire">
    </form> 
    <div>
        <p><?php if(isset($message)){echo '<p>'.$message.'</p>';} ?></p>
        <p><?php if(isset($success)){echo '<p>'.$success.'</p>';} ?></p>
    </div>
    <a href="index.php">Retour à l'accueil</a>
</div>

