// $( document ).ready( function(){
// 	$("#video-nature, #video-partage, #video-culture" ).hide();
// 	$( "li" ).click( 
// 		function(){
// 			var theme = $(this).attr("id");
// 			$("div").removeClass("show");
// 			$("#video-"+theme).addClass("show");
// 		});
// });

$( document ).ready( function(){
	$("#video-nature, #video-partage, #video-culture").hide();
	$( "li" ).click( 
		function(){
			var theme = $(this).attr("id");
			var video = $("#video-"+theme).children().attr("id");
			// var resetVideo = !video;
			$(".video").hide(
				function(){
					var hidePlayer = videojs("#culture");
					var hidePlayerOne = videojs("#partage")
					var hidePlayerTwo = videojs("#nature")

					hidePlayer.pause();
					hidePlayerOne.pause();
					hidePlayerTwo.pause();
				});
			$("#video-"+theme).show(
				function(){
					videojs(video).ready(
						function(){
							var myPlayer = this;
							
							// get
							var isVolumeMuted = myPlayer.muted();
							var whereYouAt = myPlayer.currentTime();
							// set
							myPlayer.muted(false); // mute the volume
							myPlayer.currentTime(10)
							// EXAMPLE: Start playing the video.
							myPlayer.play();
						  
						});
				});
		});
});
