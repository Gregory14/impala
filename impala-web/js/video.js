var myPlayer;
$( document ).ready( function(){
	$("#video-nature, #video-partage").hide();
	$( "li" ).click( 
		function(){
			// Declaration Variable
			var theme = $(this).attr("title");
			var video = $("#video-"+theme).children().attr("id");
			// Reset Video
			$(".video").fadeOut(
				function(){
					var hidePlayer = videojs("#partage");
					var hidePlayerOne = videojs("#nature");

					hidePlayer.pause();
					hidePlayerOne.pause();
				});
			// Show Video
			$("#video-"+theme).fadeIn(
				function(){
					var player = videojs(video);

					player
					//.off('ended')	
					.on('ended', function(){
					// Ici déclanchement à la fin de la video
						$("#video-"+theme+" div.popup").removeClass('hidden');
						$("#video-"+theme+" div.popup").addClass('show');
					})
					// 
					.ready(
						function(){
							// get
							myPlayer = this;
							console.log('ended current time = '+myPlayer.currentTime());
                			console.log(' duration: '+myPlayer.duration());
							// set
							myPlayer.muted(false); // CONTROL MUTE VIDEO
							myPlayer.currentTime(0);
							myPlayer.play(); // AUTO PLAY VIDEO
							
								console.log('Times'+myPlayer.currentTime())
									
													  
						});
				});			
		});
});