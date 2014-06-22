<?php

//Modifier les informations
    
    //Modif Email
    /*if(isset($_POST['saveMail'])){
        $id=htmlspecialchars($_POST['id']);
        $newMail=htmlspecialchars($_POST['newMail']);
        $confirmMail=htmlspecialchars($_POST['confirmMail']);
        $password=htmlspecialchars($_POST['password']);

        $password=hash("sha256", $password);

        $VerifMail=$mysql->prepare('SELECT email FROM users WHERE email=:email');
        $VerifMail->execute(array(':email'=>$newMail));

        $VerifPassword=$mysql->prepare('SELECT password FROM users WHERE password=:password AND id=:id');
        $VerifPassword->execute(array(':password'=>$password, ':id'=>$id));

        if($VerifMail->fetch()){
            $messageMail = "Email déjà existant ou identique";
        }
        else if($newMail !== $confirmMail){
            $messageMail = "Les deux adresses ne sont pas identiques";
        }
        else if($VerifPassword->fetch()){
            $updateMail=$mysql->prepare('UPDATE users SET email=:email WHERE id=:id');
            $updateMail->execute(
                array(
                    ':email'=>$newMail,
                    ':id'=>$id
                )
            );

            if($updateMail){
                $success="Nouvel mail enregistré";

                //nouvelle variable SESSION
            }
            else{
                $messageMail="Erreur réseau";
            }
        }
        else{

            $messageMail = "Mot de passe incorrect";
            
        }
    }*/


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