<?php session_start(); ?>
<?php 

/** Page waiting ***/
	if(isset($_POST['inscription'])){
		// Protection de la variable
		$email=htmlspecialchars($_POST['email']);
		
		// Verification des champs
		if (strlen($email)<8)
	{
		// 3 - message d'erreur
		// $message="Veuillez remplir l'email correctement.";
		header('location:../waiting.php?reponse=Champ incorrect, veuillez saisir au moins 8 caractères.');
	}
		else
		{
			// 4 - inclure config.php pour connexion bdd
			include('config.php');
			$req=$mysql->prepare('INSERT INTO waiting (email) VALUES (:email)');
			$insert=$req->execute(array(':email'=>$email));
			if($insert)
			{
				$emetteur = "atmosphere.parigot@gmail.com"; //senders e-mail adress 
				$recipient = $email; //recipient 
				$mail_body = "<table width='500' height='300' border='0' align='left' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
					<tr>
						<td>Bonjour,</td>
					</tr>
					<tr>
						<td>Merci de votre inscription au site Atmosphere Parigot.</td>
					</tr>
					<tr>
						<td>Vous recevrez prochainement les informations sur nos évènements.</td>
					</tr>
					<tr>
						<td>Merci bien.</td>
					</tr>
					<tr>
						<td><img width='300' height='100' src='http://www.atmosphere-parigot.fr/img/signature-mail.png' alt='Atmosphère Parigot'/></td>
					</tr>
				</table>"; //mail body 
				$subject = "Inscription au lancement Atmosphere Parigot"; //subject 
				$header = "From: Asmosphere Parigot <" . $emetteur . ">\n"; //optional headerfields
				$header .= 'MIME-Version: 1.0' . "\r\n";
				$header .= "Content-Type : text/html; charset=\'iso-8859-1\'"; 
				
				mail($recipient, $subject, $mail_body, $header); //mail command :) 

				// si insert ok : $message = 'bienvenue'
				//$message = "Votre inscription a été effectuée.";
				header("location:../waiting.php?reponse=Bien mon loulou tu es inscris !");
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