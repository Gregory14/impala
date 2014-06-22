<?php 
$title="Atmosphère - Choix de l'arrondissement et du thème";
$description="Une petite description du lieu";

include("includes/header.php"); 
?>
		<h2>C'est quoi qu'tu veux faire ?</h2>
		<section id="district-content">
			<div id="district-choice">
				<img src="#" alt="Carte des arrondissements de Paris" />
				<div id="nineteenth">
					<p>19eme</p>
				</div>
				<div id="twentieth">
					<p>20eme</p>
				</div>
			</div>
			<div id="theme-choice">	
				<div id="video-nature" class="video">
					<video class="video-js vjs-default-skin vjs-big-play-centered" id="nature"  preload width="849" height="478" controls="controls"  data-setup='{"example_option":true}'>
						<source src="video/mih.mp4" type="video/mp4" />
						<source src="video.webm" type="video/webm" />
						<source src="video.ogv" type="video/ogg" />
					</video>
				</div>
				<div id="video-partage" class="video">
					 <video class="video-js vjs-default-skin vjs-big-play-centered" id="partage"  preload width="849" height="478" controls="controls"  data-setup='{"example_option":true}'>
						<source src="video/mih.mp4" type="video/mp4" />
						<source src="video.webm" type="video/webm" />
						<source src="video.ogv" type="video/ogg" />
					</video>
				</div>
				<div id="video-culture" class="video">
					<video class="video-js vjs-default-skin vjs-big-play-centered" id="culture"  preload width="849" height="478" controls="controls"  data-setup='{"example_option":true}'>
						<source src="video/mih.mp4" type="video/mp4" />
						<source src="video.webm" type="video/webm" />
						<source src="video.ogv" type="video/ogg" />
					</video>
					<div class="partage">
		                <p>partage cette putain de video</p>
		            </div>
				</div>
				<div>
					<ul>
						<li id="nature" title="nature">
							<h3>Nature</h3>
						</li>
						<li id="partage">
							<h3>Partage</h3>
						</li>
						<li id="culture">
							<h3>Culture</h3>
						</li>
					</ul>
				</div>
			</div><!--#theme-choice-->
		</section>
<?php include("includes/footer.php"); ?>
