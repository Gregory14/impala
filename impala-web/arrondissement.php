<?php include("includes/header.php"); ?>
<!-- END header -->

<h2>C'est quoi qu'tu veux faire ?</h2>
<div>
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
	</div>

	<div>
	<ul>
		<li id="nature" title="nature">
				<p>Nature</p>
				<img src="img/favicon.png" alt="">
		</li>
		<li id="partage">
				<p>Partage</p>
				<img src="img/favicon.png" alt="">
		</li>
		<li id="culture">
				<p>Culture</p>
				<img src="img/favicon.png" alt="">
		</li>
	</ul>
</div>

<!-- START Footer -->
<?php include("includes/footer.php"); ?>
<!-- END footer -->