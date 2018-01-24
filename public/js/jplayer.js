$(document).ready(function(){

	var stream = {
		title: "ABC Jazz",
		mp3: "https://revolutionradio.ru:8443/live.mp3"
		// mp3: "http://192.168.254.101:8000/stream/swyh.mp3"
	},
	ready = false;

	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			ready = true;
			$(this).jPlayer("setMedia", stream);
		},
		pause: function() {
			$(this).jPlayer("clearMedia");
		},
		error: function(event) {
			if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
				// Setup the media stream again and play it.
				$(this).jPlayer("setMedia", stream).jPlayer("play");
			}
		},
		swfPath: "../../dist/jplayer",
		supplied: "mp3",
		preload: "none",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		keyEnabled: true
	});

});