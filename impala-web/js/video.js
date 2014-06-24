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
			var theme = $(this).attr("title");
			var video = $("#video-"+theme).children().attr("id");
			// var resetVideo = !video;
			$(".video").hide(
				function(){
					var hidePlayer = videojs("#culture");
					var hidePlayerOne = videojs("#partage");
					var hidePlayerTwo = videojs("#nature");

					hidePlayer.pause();
					hidePlayerOne.pause();
					hidePlayerTwo.pause();
				});
			$("#video-"+theme).show(
				function(){
					videojs(video).ready(
						function(){
							// get
							var myPlayer = this;
							var isVolumeMuted = myPlayer.muted();
							// var whereYouAt = myPlayer.currentTime();
							// set
							myPlayer.muted(false); // mute the volume
							// myPlayer.currentTime(10) // Time to start video
							// EXAMPLE: Start playing the video.
							myPlayer.play();

							// TEST DUREE VIDEO FIN - COURRENT
							// var end = myPlayer.duration();
							// var time = myPlayer.currentTime();
							
							// if (end - time < 10) {
							// 	alert("YES");
							// };
							
													  
						});
				});			

		});




});
