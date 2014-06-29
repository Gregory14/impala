<?php

//---AJOUTER ADRESSE DE FACTURATION---//

if(isset($_POST['pay'])){

    //Vérifier si adresse facturation existe déjà en BDD
    $address=htmlspecialchars($_POST['address']);
    $id=htmlspecialchars($_POST['id']);

    $req=$mysql->prepare('SELECT address FROM users WHERE id=:id AND address=:address');
    $req->execute(
        array(
            ':id' => $id,
            ':address' => $address
        )
    );

    if($req->rowCount()==1){
        
        //Adresse déjà existante et identique donc redirection vers page de validation
        //  Vide le panier actuel
        header('location: validation.php?test');
        unset($_SESSION['panier']);
    }
    else{
        //Adresse non existante ou différente = ajouter l'adresse dans la base de données pour l'utilisateur concerné
        $city=htmlspecialchars($_POST['city']);
        $postal=htmlspecialchars($_POST['postal']);
        $country=htmlspecialchars($_POST['country']);

        $add=$mysql->prepare('UPDATE users SET address=:address, city=:city, postal=:postal, country=:country WHERE id=:id');
        $add->execute(
            array(
                ':address' => $address,
                ':city' => $city,
                ':postal' => $postal,
                ':country' => $country,
                ':id' => $id
            )
        );

        if($add==true){

            //Redirection vers page de validation
            // Vide le panier
            header('location: validation.php');
            unset($_SESSION['panier']);
        }
        else{
            echo "Erreur réseau. Contacter administrateur";
        }
    }
}//fin isset

?>