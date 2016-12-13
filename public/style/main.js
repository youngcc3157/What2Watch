$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(2000);
});

$('.button').click(function(){
	$('#container, #question').css('visibility','visible').hide().fadeIn(2000);
	$('html, body').animate({ 
      scrollTop: $('#question').offset().top 
  }, 2000); 
});

function myFunction() {
    var x = document.createElement("IFRAME");
    x.setAttribute("src", "http://www.w3schools.com");
    document.body.appendChild(x);
}