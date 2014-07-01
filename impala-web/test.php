<?php 
include 'includes/header.php';
// SELECT 
// 	e.title,
// 	e.coucou,
// 	l.adresse,
// 	l.swag
// FROM event AS e
// JOIN lieu AS l
// ON e.lieu_id = l.id


// SELECT 
// 	e.title,
// 	e.date,
// 	u.username,
// 	u.email
// FROM events AS e
// JOIN lieu AS u
// ON e.title_id = u.id

if($_GET['id']){
        $id=htmlspecialchars($_GET['id']);

        $req=$mysql->prepare(' SELECT 
        							id,
									title,
									date,
									username,
									email
								FROM events
								JOIN users
								ON users_id = id
		');
        $req->execute(array(':id'=>$id));
        $donnees=$req->fetch();

        while($donnees=$req->fetch()){
        	var_dump($donnees);
        }
    }

    else{
    	echo "pas rentrer dans la boucle";
    }

?>