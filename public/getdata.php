<?php

require_once('../connect.php');

$query = "SELECT title, id, link FROM movies";

$response = @mysqli_query($conn, $query);
if (!$response) {
    die('Invalid query: ' . mysql_error());
}

if($response){
	echo'<table align= "left" cellspacing = "5" cellpadding = "8">
	<tr><td align="left"><b>id</b></td>
	<td align="left"><b>title</b></td>
	<td align="left"><b>link</b></td></tr>';
	
	while($row = mysqli_fetch_array($response)) {
		echo '<tr><td align = "left">' . $row['id'] .
			'</td><td align = "left">' . $row['title'] . 
			'</td><td align = "left">' . $row['link']. '</td>';
		echo '</tr>';
	}
	
	echo '</table>';
} else {
	echo "Couldn't issue database query";
	
	echo mysqli_error($conn);
}

mysqli_close($conn)

?>