<?php
$title="Atmosphère - Choix de l'arrondissement";
$description="Démarre l’expérience Atmosphère-Parigot : choisis ton bled dans Paname !";

include("includes/header.php"); 

?>
		<div class="container">
			<section id="district-content">
				<h2>Où c'est qu'tu veux aller ?</h2>
				<div id="district-choice">
					<img src="img/content/arrondissement/map-paris.png" alt="Carte des arrondissements de Paris" />
					<div id="nineteenth">
						<p><a href="theme.php?arr=nineteenth">19eme</a></p>
					</div>
					<div id="twentieth">
						<p><a href="theme.php?arr=twentieth">20eme</a></p>
					</div>
				</div>
			</section>
		</div>
<?php include("includes/footer.php"); ?>