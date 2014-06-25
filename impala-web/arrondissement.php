<?php 
$title="Atmosphère - Choix de l'arrondissement et du thème";
$description="Une petite description du lieu";

include("includes/header.php"); 
?>
		<section id="district-content">
			<h2>Où c'est qu'tu veux aller ?</h2>
			<div id="district-choice">
				<img src="#" alt="Carte des arrondissements de Paris" />
				<div id="nineteenth">
					<p>19eme</p>
				</div>
				<div id="twentieth">
					<p>20eme</p>
				</div>
			</div>
		</section>
		<section id="theme-content">	
			<h2>C'est quoi qu'tu veux faire ?</h2>
			<div id="theme-choice">	
				<div id="video-nature" class="video">
					<video class="video-js vjs-default-skin vjs-big-play-centered" id="nature"  preload  controls="controls"  data-setup='{"example_option":true}'>
						<source src="video/mih.mp4" type="video/mp4" />
						<source src="video.webm" type="video/webm" />
						<source src="video.ogv" type="video/ogg" />
					</video>
				</div>
				<div id="video-partage" class="video">
					 <video class="video-js vjs-default-skin vjs-big-play-centered" id="partage"  preload controls="controls"  data-setup='{"example_option":true}'>
						<source src="video/mih.mp4" type="video/mp4" />
						<source src="video.webm" type="video/webm" />
						<source src="video.ogv" type="video/ogg" />
					</video>
				</div>
				
				<div id="theme-button">
					<ul>
						<li title="nature">
							<h3>Nature</h3>
							<img src="#" alt="Carte des arrondissements de Paris" />
						</li>
						<li title="partage">
							<h3>Partage</h3>
							<img src="#" alt="Carte des arrondissements de Paris" />
						</li>
					</ul>
					<div class="clear"></div>
				</div>
				<a href="theme.php">Page Thème</a>
			</div><!--#theme-choice-->
		</section>
<?php include("includes/footer.php"); ?>
