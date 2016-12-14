$(document).ready(function() {
	$('#text').css('visibility','visible').hide().fadeIn(1500);
});

$('.button').click(function(){
	$('#container, #question').css('visibility','visible').hide().fadeIn(2000);
	$('html, body').animate({ 
      scrollTop: $('#block').offset().top 
  }, 800); 
});

function myFunction() {
    var x = document.createElement("IFRAME");
    x.setAttribute("src", "http://www.w3schools.com");
    document.body.appendChild(x);
}