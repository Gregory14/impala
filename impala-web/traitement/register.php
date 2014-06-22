<?php

//var_dump($_POST);

if(isset($_POST['register'])){
    
    //--01
    if(isset($_POST['username']) && strlen($_POST['username']) >2 ){
        $username=htmlspecialchars($_POST['username']);
    }
    else {
        $message='Champ <b>username</b> invalide';   
    }
    if(isset($_POST['email']) && strlen($_POST['email']) >8 ){
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        if(preg_match($regex, $_POST['email'])){
            $email=htmlspecialchars($_POST['email']);
        }
        else{
            $message='Adresse email invalide';
        }
    }
    else{
        $message='Champ <b>email</b> invalide'; 
    }
    if(isset($_POST['password']) && strlen($_POST['password']) >4 ){
        $password=htmlspecialchars($_POST['password']);
    }
    else{
        $message='Champ <b>password</b> invalide';
    }
    
    
    //--02
    if(!isset($message)){
        $reponse=$mysql->prepare('SELECT username FROM users WHERE username=:username');
        $reponse->execute(array(':username'=>$username));
        
        if($reponse->rowCount() > 0){
            $message='Username déjà existant';
            //die('bobby');
        }
        else{
            $email=htmlspecialchars($_POST['email']);
            
            $reponse=$mysql->prepare('SELECT email FROM users WHERE email=:email');
            $reponse->execute(array(':email'=>$email));

            //die('hello');
            
            if($reponse->rowCount() > 0){
                $message='Email déjà existant';
            }
            else{
                //$password=sha1($password);

                $password = hash("sha256",$password); 


                $req=$mysql->prepare('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');
                $add=$req->execute(array(
                    ':username'=>$username,
                    ':email'=>$email,
                    ':password'=>$password));
                    
                if($add==true){
                    $success='Inscription réussie';
                    $_SESSION=array(
                    ':username'=>$username,
                    ':email'=>$email,
                    ':password'=>$password,
                    );
                }
                else{
                    $message='Erreur, contactez l\'administrateur du site'; 
                }
            }
        }
    }       
}