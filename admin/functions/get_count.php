<?php

function countComments($id){
	$query = "SELECT COUNT(*) FROM `comments` WHERE post_id = '$id'";
	global $db;
	
	$result = $db->query($query);
	
	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
	return $count;
}

//site views
function countTotalViews(){
    
    global $db;
    
    $query = "SELECT COUNT(*) FROM `pageview` WHERE page='home'";
    
	$result = $db->query($query);

	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
	return $count;
}

function countMonthlyViews(){

	$year = date("Y");
	$month = date("m");
    
    global $db;
    
    $query = "SELECT COUNT(*) FROM `pageview` WHERE page='home' AND year='$year' AND month='$month'";
    
	$result = $db->query($query);

	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
	return $count;
}

function countDailyViews(){
    
    $year = date("Y");
	$month = date("m");
    $day = date("d");
    
    global $db;
    
    $query = "SELECT COUNT(*) FROM `pageview` WHERE page='home' AND year='$year' AND month='$month' AND day='$day'";
    
	$result = $db->query($query);

	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
	return $count;

}

//count posts
function countAllPosts(){
	$query = "SELECT COUNT(*) FROM `posts`";
	global $db;
	
	$result = $db->query($query);
	
	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
	return $count;
}


//count post views
function countPostViews($id){
    
    global $db;
    
    $query = "SELECT COUNT(*) FROM `postview` WHERE post_id='$id'";
    
	$result = $db->query($query);

	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	
	while($rows = mysqli_fetch_row($result)){
		$count = $rows[0];
	}
    
    return $count;
}

?>