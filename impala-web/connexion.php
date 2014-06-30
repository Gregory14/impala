<?php 
$title="Atmosphère - Connectez-vous";
$description="Une petite description du lieu";

include("includes/header.php");


//---SE CONNECTER A SON ESPACE MEMBRE---//

//Vérification des données envoyés via le formulaire de connexion
if(isset($_POST['login'])){
    
    if($_SERVER['REQUEST_METHOD']!= 'POST'){
        header('location:./index.php');
        exit();
    }
    if(!isset($_POST['username']) || strlen($_POST['username']) < 4 ){
        $message = "Username invalide";
    }
    else if(!isset($_POST['password']) || strlen($_POST['password']) < 4){
        $message="Mot de passe invalide";
    }
    else
    {
        //Connexion à la base de données
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $password = hash("sha256",$password);

        $reponse=$mysql->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $reponse->execute(array(":username"=>$username,":password"=>$password));      


        //Création des variables de session propres à l'utilisateur (username, email)
        if($reponse->rowCount()==1){
            // session_start(); => DEJA DeÉCLARÉ DANS LE HEADER
            $donnees=$reponse->fetch();
            
            foreach($donnees as $key => $value){
                $_SESSION[$key] = $value;   
            }

            //Création d'une variable qui prouve que l'utilisateur est connecté
            $_SESSION['connect']= true;
            

            //Redirection après connexion
            //  Utilisateur est arrivé sur la page de connexion après validation du panier
            if(isset($_SESSION['currentPurchase'])){
                header('location: ./facturation.php');
            }
            else{
                //Sinon, redirection vers l'accueil
                header('location: ./index.php');
            }
        }
        else{
            $message = "Username et/ou mot de passe incorrect";
        }
    }
}//fin isset
?>
        <h2>Connectez-vous</h2>
        <section id="connect-content" class="container container">
            <div class="form-content">
                <div id="connect-user">
                    <p class="alerts"><?php if(isset($message)){ echo '<p>'.$message.'</p>';} ?></p>
                    <form name="formLogin" action ="./connexion.php" method="post">
                        <label for="username">Username</label>
                            <input id="username" type="text" name="username" required tabindex="1" value="">
                        <label for="password">Mot de passe</label>
                            <input id="password" type="text" name="password" required tabindex="2" value="">
                        <input type="submit" name="login" class="button" value="Se connecter">
                    </form>
                </div>
                <div id="forgotten-password">
                    <p>Mot de passe oublié ?</p>
                    <p>Renseignez votre adresse email ci-dessous pour recevoir un nouveau mot de passe.</p>
                    <form name="formLogin" action ="./connexion.php" method="post">
                        <label for="email">Courriel</label>
                            <input id="email" type="email" name="email" tabindex="3" value="">
                        <input type="submit" name="recoverPass" class="button" value="Récupérer son mot de passe">
                    </form>
                </div>
            </div>
        </section>
<?php include("includes/footer.php"); ?> 






