$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(1500);
	$.post('getMovie.php', {name: name}, function(data) {
		alert(data);
	});
});

function clicked(obj, emotion) {
	$('#iframe').attr('src', myFunction(emotion));
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
	var link = "https://www.rottentomatoes.com/m/";
	$.post('getMovie.php', {name: name}, function(data) {
		alert(data);
	});

    return link;
}