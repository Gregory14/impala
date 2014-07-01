<?php
$title="Atmosphère - Choix de l'arrondissement et du thème";
$description="Une petite description du lieu";

include("includes/header.php"); 

// Initialisation contenu
// if(isset($_GET['arr'])){
//         $arr=htmlspecialchars($_GET['arr']);

//         $req=$mysql->prepare('SELECT * FROM events WHERE id=:id');
//         $req->execute(array(':id'=>$arr));

//         $donnees=$req->fetch();
//     }
?>
		<div class="container">
			<section id="district-content">
				<h2>Où c'est qu'tu veux aller ?</h2>
				<div id="district-choice">
					<img src="img/content/arrondissement/map-paris.png" alt="Carte des arrondissements de Paris" />
					<div id="nineteenth">
						<p><a href="theme.php?arr=19">19eme</a></p>
					</div>
					<div id="twentieth">
						<p><a href="theme.php?arr=20">20eme</a></p>
					</div>
				</div>
			</section>
		</div>
<?php include("includes/footer.php"); ?>