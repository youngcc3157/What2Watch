$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(2000);
	$("#container").load("https://www.rottentomatoes.com/m/the_secret_life_of_pets #center");
});



function myFunction() {
    var x = document.createElement("IFRAME");
    x.setAttribute("src", "http://www.w3schools.com");
    document.body.appendChild(x);
}