<?php

$bar = isset($_POST['input']) ? $_POST['input'] : null;

require_once('../connect.php');

if ($bar === "Happy"){
	echo "titanic";
} 
else if ($bar === "Sad") {
	echo "titanic";
}
else if ($bar === "Calm") {
	echo "titanic";
}
else if ($bar === "Excited") {
	echo "thor";
}
else if ($bar === "Adventurous") {
	echo "deadpool";
}




?>