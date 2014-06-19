<?php
include("traitement/config.php");

if(isset($_POST['login'])){
    
    if($_SERVER['REQUEST_METHOD']!= 'POST'){
        header('location:./index.php');
        exit();
    }

    if(strlen($_POST['username']) < 4 or strlen($_POST['password']) < 4){
        $message = "Username et/ou mot de passe invalide";
    }
    else
    {
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $password=sha1($password);
        echo $password;

        $reponse=$mysql->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $reponse->execute(array(":username"=>$username,":password"=>$password));      
    }

    if($reponse->rowCount()==1){
        session_start();
        $donnees=$reponse->fetch();     

        /*$_SESSION['id']=$donnees['id'];
        $_SESSION['username']=$donnees['username'];
        $_SESSION['email']=$donnees['email'];
        $_SESSION['password']=$donnees['password'];*/
        
        foreach($donnees as $key => $value){
            $_SESSION[$key] = $value;   
        }

        $_SESSION['connect']= true;
        
        //print_r($_SESSION);
        header('location:index.php');
    }
    else{
        $message = "Username et/ou mot de passe incorrect";
    }
}
?>

<div>
    <form name="formLogin" action ="./connexion.php" method="post">
        <label>Username</label>
            <input type="text" name="username" value="">
        <label>Mot de passe</label>
            <input type="text" name="password" value="">
        <input type="submit" name="login" value="Se connecter">
    </form>
</div>
<div>
    <?php if(isset($message)){ echo '<p>'.$message.'</p>';} ?>
</div>
<a href="index.php">Retour à l'accueil</a>

<?php include("includes/footer.php"); ?> 






