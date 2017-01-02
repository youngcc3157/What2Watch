<!DOCTYPE html>
<html>
	<head>
		<title>What2Watch</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>

		<div id="header">
			<h1>What2Watch</h1>
		</div>
		
		<div id="text">
			<h2>How are you feeling today?</h2>
		</div>
		
		<div id="buttons">
			<input type="button" class="button happy" value="Happy">
			<input type="button" class="button sad" value="Sad">
			<input type="button" class="button calm" value="Calm">
			<input type="button" class="button excited" value="Excited">
			<input type="button" class="button adventurous" value="Adventurous">
		</div>
		
		<div id="block"></div>
		
		<?php
		$divName = "test";
			echo '<div id = "'. $divName. '"> 
					<h2> yoyo <h2>
				  </div>';
		?>
		
		<div id="container">
			<iframe scrolling="no" id="iframe" src="https://www.rottentomatoes.com/m/ben_hur_2016" sandbox></iframe>
			<div id="cover"></div>
		</div>
		
		<div id="question">
			<p>Have you tried this movie before?</p>
			<p>Click <a href="https://www.rottentomatoes.com/m/suicide_squad_2016">here</a> to go to RottenTomatoes website.</p>
		</div>
		
		<div id="footer">
			<p>copyright &copy YoungChul Chun</p>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
		<script type="text/javascript" src='style/main.js'></script>
		
   </body>

</html>