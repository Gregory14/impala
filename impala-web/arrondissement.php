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
						<p><a href="arrondissement.php?arr=19">19eme</a></p>
					</div>
					<div id="twentieth">
						<p><a href="arrondissement.php?arr=20">20eme</a></p>
					</div>
				</div>
			</section>
			<section id="theme-content">	
				<h2>C'est quoi qu'tu veux faire ?</h2>
				<div id="theme-choice">	
					<div id="video-nature" class="video">
						<video class="video-js vjs-default-skin vjs-big-play-centered" id="nature"  preload  controls="controls"  data-setup='{"example_option":true}' width="auto" height="auto">
							<source src="video/mih.mp4" type="video/mp4" />
							<source src="video.webm" type="video/webm" />
							<source src="video.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="#" class="button">Partager la vidéo</a></p>
							<p class="inline-block"><a href="theme.php<?php echo "?=".$arr;?>" class="button">Matte les patelins</a></p>
						</div>
					</div>
					<div id="video-partage" class="video">
						 <video class="video-js vjs-default-skin vjs-big-play-centered" id="partage"  preload controls="controls"  data-setup='{"example_option":true}' width="auto" height="auto">
							<source src="video/mih.mp4" type="video/mp4" />
							<source src="video.webm" type="video/webm" />
							<source src="video.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="#" class="button">Partager la vidéo 2</a></p>
							<p class="inline-block"><a href="theme.php<?php echo "?=".$arr;?>" class="button">Matte les patelins 2</a></p>
						</div>
					</div>
					<div id="theme-button">
						<ul>
							<li title="nature">
								<h3>Nature</h3>
								<img src="<?php echo "?=".$arr;?>" alt="Carte des arrondissements de Paris" />
							</li>
							<li title="partage">
								<h3>Partage</h3>
								<img src="<?php echo "?=".$arr;?>" alt="Carte des arrondissements de Paris" />
							</li>
						</ul>
						<div class="clear"></div>
					</div>
					<a href="theme.php<?php echo "?=".$arr;?>">Page Thème</a>
				</div><!--#theme-choice-->
			</section>
		</div>

<?php include("includes/footer.php"); ?>
