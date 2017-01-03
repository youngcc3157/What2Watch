<?php

$bar = isset($_POST['input']) ? $_POST['input'] : null;

require_once('../connect.php');

if ($bar === "Happy"){
	$query = "SELECT link FROM movies WHERE genre = 'Action' OR genre = 'Drama' ORDER BY RAND() LIMIT 1";
} 
else if ($bar === "Sad") {
	$query = "SELECT link FROM movies WHERE genre = 'Action' OR genre = 'Drama' ORDER BY RAND() LIMIT 1";
}
else if ($bar === "Calm") {
	$query = "SELECT link FROM movies WHERE genre = 'Action' OR genre = 'Drama' ORDER BY RAND() LIMIT 1";
}
else if ($bar === "Excited") {
	$query = "SELECT link FROM movies WHERE genre = 'Action' OR genre = 'Horror' ORDER BY RAND() LIMIT 1";
}
else if ($bar === "Adventurous") {
	$query = "SELECT link FROM movies WHERE genre = 'Action' OR genre = 'Horror' ORDER BY RAND() LIMIT 1";
}

$response = @mysqli_query($conn, $query);
if (!$response) {
    die('Invalid query: ' . mysql_error());
}

if($response){
	$row = mysqli_fetch_array($response);
	echo $row['link'];
} else {
	echo "Couldn't issue database query";
	
	echo mysqli_error($conn);
}

mysqli_close($conn)


?>