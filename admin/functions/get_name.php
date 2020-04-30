<?php

function catName($id){
	$query = "SELECT * FROM `categories` WHERE id = '$id'";
	global $db;

	$result = $db->query($query);

	if (!$result) {
	trigger_error('Invalid query: ' . $db->error);
	}

	while($rows = mysqli_fetch_array($result)){
		$name = $rows['name'];
	}
	return $name;
}



?>