<?php
include("traitement/config.php"); 


//Modifier les informations
/*if(isset($_POST['saveUser'])){
    $id=htmlspecialchars($_POST['id']);
    $username=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    $newPassword=htmlspecialchars($_POST['newPassword']);

    $password= hash("sha256",$password);
    $newPassword = hash("sha256",$newPassword);


    $VerifUsername=$mysql->prepare('SELECT username FROM users WHERE username=:username AND id!=:id');
    $VerifUsername->execute(array(':username'=>$username, ':id'=>$id));
    
    $VerifMail=$mysql->prepare('SELECT email FROM users WHERE email=:email AND id!=:id');
    $VerifMail->execute(array(':email'=>$email, ':id'=>$id));

    $VerifPassword=$mysql->prepare('SELECT password FROM users WHERE password=:password AND id=:id');
    $VerifPassword->execute(array(':password'=>$password, ':id'=>$id));
    
    if($VerifUsername->fetch()){
        $message='Username déjà existant';
    }
    else if($VerifMail->fetch()){
        $message='Email déjà existant';
    }
    else if($VerifPassword == false || !isset($_POST['password'])){
        $message='Mot de passe incorrect ou vide';
    }
    else{ 

        echo "je suis la";
        /*$VerifNewPass=$mysql->prepare('SELECT password FROM users WHERE password=:password AND id!=:id');
        $VerifNewPass=$mysql->execute(array(':password'=>$newPassword));
    echo "Yahoo !";  
        /*$save=$mysql->prepare('UPDATE users SET username=:username, email=:email WHERE id=:id');
        $save->execute(
            array(
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':email'=>$email,
                ':login'=>$login,
                ':pass'=>$pass,
                ':level'=>$level,
                ':id'=>$id
            )
        );
        if($save){                  //pr vider les champs du formulaire "Ajouter membre" lorsqu'on clique sur "Sauvegarder"
            unset($_POST['nom']);
            unset($_POST['prenom']);
            unset($_POST['email']);
            unset($_POST['login']);
            unset($_POST['pass']);
            unset($_POST['level']);*/
    /*    }
    }
//}*/


//Supprimer un compte
if(isset($_POST['deleteUser'])){
    $id=htmlspecialchars($_POST['id']);
    $password=htmlspecialchars($_POST['password']);
    $confirmPassword=htmlspecialchars($_POST['confirmPassword']);

    $password= hash("sha256",$password);
    $confirmPassword = hash("sha256",$confirmPassword);

    $VerifPassword=$mysql->prepare('SELECT password FROM users WHERE password=:password AND id!=:id');
    $VerifPassword->execute(array(':password'=>$password, ':id'=>$id));

    if($VerifPassword->fetch()){
        $message='Mot de passe incorrect';
    }
    else if($password=$confirmPassword){
        $delete=$mysql->prepare('DELETE FROM users WHERE id=:id');
        $delete->execute(array(':id'=>$id));

        $success="Suppression réussie";

        session_destroy();

        header('location:index.php');
    }
    else{
        $message='Mot de passe et confirmation ne sont pas identiques';
    }
}




?>