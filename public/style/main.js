$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(1500);
});

function clicked(obj, emotion) {
	myFunction(emotion);
	$('#container, #question').css({"visibility": "visible"}).hide().fadeIn(2000);
	$('html, body').animate({ 
		scrollTop: $('#block').offset().top 
	}, 800);
	$('#container').css('height', '660px');
	$('#iframe').css({
		"position": "relative",
		"top": "305px",
		"border": "0px none", 
		"margin-left": "-185px", 
		"height": "1200px",
		"margin-top": "-533px", 
		"width": "1200px",
		"right": "200px"
	})
}
function myFunction(emotion) {
	$.post('getMovie.php', {input: emotion}, function(data) {
		$('#iframe').attr('src', "https://www.rottentomatoes.com/m/" + data);
		document.getElementById("link").href = "https://www.rottentomatoes.com/m/" + data;
	});
}