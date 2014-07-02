<?php
$title="Atmosphère - Choix du thème";
$description="Choisis maintenant ton ambiance, ton thème : partage, culture, nature, extérieur, intérieur… Atmosphère-Parigot te propose un choix énorme de possibilités.";

include("includes/header.php"); 

?>
		<div class="container">
			<section id="theme-content">
                <p><a href="patelins.php" class="back" title="retour à tous les lieux"><</a></p>
				<div id="theme-choice">	
					<div id="video-nature" class="video">
						<video class="video-js vjs-default-skin vjs-big-play-centered" id="nature"  preload  controls="controls"  data-setup='' width="auto" height="auto">
							<source src="video/nature<?php echo $_GET['arr']?>.mp4" type="video/mp4" />
							<source src="video/nature<?php echo $_GET['arr']?>.webm" type="video/webm" />
							<source src="video/nature<?php echo $_GET['arr']?>.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="lieux.php<?php echo "?arr=".$_GET['arr']."&theme=nature";?>" class="button">Choisir un lieu</a></p>
							<!-- <p class="inline-block"><a href="#" class="button">Partager la vidéo</a></p> -->
							<div class="inline-block fb-share-button" data-href="http://www.atmosphere-parigot.fr/theme.php?id=<?php $_GET['id']?>" data-type="button"></div>
						</div>
					</div>
					<div id="video-partage" class="video">
						 <video class="video-js vjs-default-skin vjs-big-play-centered" id="partage"  preload controls="controls"  data-setup='' width="auto" height="auto">
							<source src="video/partage<?php echo $_GET['arr']?>.mp4" type="video/mp4" />
							<source src="video/partage<?php echo $_GET['arr']?>.webm" type="video/webm" />
							<source src="video/partage<?php echo $_GET['arr']?>.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="lieux.php<?php echo "?arr=".$_GET['arr']."&theme=partage";?>" class="button">Choisir un lieu</a></p>
							<!-- <p class="inline-block"><a href="#" class="button">Partager la vidéo</a></p> -->
							<div class="inline-block fb-share-button" data-href="http://www.atmosphere-parigot.fr/theme.php?id=<?php $_GET['id']?>" data-type="button"></div>
						</div>
					</div>
					<div id="theme-button">
						<ul>
							<li title="nature">
								<h3>Trainer et bruler l'paver</h3>
								<img src="img/content/arrondissement/parc.jpg" alt="Trainer et bruler l'paver" />
							</li>
							<li title="partage">
								<h3>S'remplir l'gosier et béqueter ?</h3>
								<img src="img/content/arrondissement/food-drink.jpg" alt="S'remplir l'gosier et béqueter ?" />
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div><!--#theme-choice-->
			</section>
		</div>
<?php include("includes/footer.php"); ?>