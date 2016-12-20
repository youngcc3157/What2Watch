$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(1500);
});

$('.button').click(function(){
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
	});
});

function myFunction() {
    var x = document.createElement("IFRAME");
    x.setAttribute("src", "http://www.w3schools.com");
    document.body.appendChild(x);
}