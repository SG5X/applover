<?php

function insert_gtm(){
		
$key = $_POST['key'];
$insert = $_POST['insert'];

	
if(isset($insert)){
	
	global $wpdb;
	
	$table = $wpdb->prefix . 'gtm';
	$wpdb->query("TRUNCATE TABLE `$table`");
	$wpdb->insert($table,array('key' => $key),array('%s'));

}

$request_uri = $_SERVER['REQUEST_URI'];

echo "<div>";
echo "<h4>Enter Your Key</h4>";
echo "<form method='POST' action='$request_uri'>";
echo "<input type='text' name='key' placeholder='enter key' required><br>";
echo "<input type='submit' name='insert' value='Send'>";
echo "</form>";
echo "</div>";

}

?>