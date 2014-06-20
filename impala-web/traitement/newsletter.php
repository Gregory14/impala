<?php session_start(); ?>
<?php 

/** Page waiting ***/
	if(isset($_POST['inscription'])){
		// Protection de la variable
		$email=htmlspecialchars($_POST['email']);
		$nom=htmlspecialchars($_POST['nom']);
		$prenom=htmlspecialchars($_POST['prenom']);
		
		// Verification des champs
		if (strlen($email)<8 || strlen($nom)<2 || strlen($prenom)<2)
	{
		// 3 - message d'erreur
		// $message="Veuillez remplir l'email correctement.";
		header('location:../waiting.php?reponse=Champ incorrect, veuillez saisir au moins 8 caractères.');
	}
		else
		{
			// 4 - inclure config.php pour connexion bdd
			include('config.php');
			$req=$mysql->prepare('INSERT INTO waiting (nom, prenom, email) VALUES (:nom, :prenom, :email)');
			$insert=$req->execute(array(':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email));
			if($insert)
			{
				//$signature = "<p><img src='img/signature-mail.png' alt='Atmosphère Parigot'/></p>";
				$Name = $prenom; //senders name 
				$emetteur = "gregory.joly.14@gmail.com"; //senders e-mail adress 
				$recipient = $email; //recipient 
				$mail_body = "Bonjour ". $Name .",\r\n \r\nMerci de votre inscription au site Atmosphere Parigot.\r\nVous recevrez prochainement les informations sur nos évènements.\r\n\r\nCordialement.\r\nL'équipe Atmosphère Parigot"; //mail body 
				$subject = "Inscription au lancement Atmosphere Parigot"; //subject 
				$header = "From: ". $Name . " <" . $emetteur . ">\r\n"; //optional headerfields 
				
				mail($recipient, $subject, $mail_body, $header); //mail command :) 

				// si insert ok : $message = 'bienvenue'
				//$message = "Votre inscription a été effectuée.";
				header('location:../waiting.php?reponse=Votre inscription a été effectuée.');
			}
			else
			{
				//else $message = 'erreur insertion veuillez contacter l'administration'
				//$message = "Erreur d'inscription, veuillez contacter l'administration.";
				header('location:../waiting.php?reponse=Erreur serveur, veuillez réessayer plus tard.');	
			}
		}
	}
?>