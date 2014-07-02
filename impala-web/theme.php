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
			<section id="theme-content">
				<div id="theme-choice">	
					<div id="video-nature" class="video">
						<video class="video-js vjs-default-skin vjs-big-play-centered" id="nature"  preload  controls="controls"  data-setup='' width="auto" height="auto">
							<source src="video/mih.mp4" type="video/mp4" />
							<source src="video.webm" type="video/webm" />
							<source src="video.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="#" class="button">Partager la vidéo</a></p>
							<p class="inline-block"><a href="lieux.php<?php echo "?=".$_GET['arr'];?>" class="button">Matte les patelins</a></p>
						</div>
					</div>
					<div id="video-partage" class="video">
						 <video class="video-js vjs-default-skin vjs-big-play-centered" id="partage"  preload controls="controls"  data-setup='' width="auto" height="auto">
							<source src="video/mih.mp4" type="video/mp4" />
							<source src="video.webm" type="video/webm" />
							<source src="video.ogv" type="video/ogg" />
						</video>
						<div class="popup hidden">
							<p class="inline-block"><a href="#" class="button">Partager la vidéo 2</a></p>
							<p class="inline-block"><a href="lieux.php<?php echo "?=".$_GET['arr'];?>" class="button">Matte les patelins 2</a></p>
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