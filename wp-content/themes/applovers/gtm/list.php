<?php

function show_gtm(){
	

	
	global $wpdb;
	$table = $wpdb->prefix . 'gtm';
	
	$rows = $wpdb->get_results("SELECT * FROM $table");
	
	echo "<div class='form-style-5'>";
	echo "<table>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>TITLE</th>";
	echo "<th>DESCRIPTION</th>";
	echo "</tr>";
	
	foreach($rows as $row){
	
		echo "<tr style='border-top: 1px solid #f4f7f8'>";
		echo "<td>";
		echo $row->id;
		echo "</td>";
		echo "<td style='width: 100px'>";
		echo $row->name;
		echo "</td>";
		echo "<td style='width: 300px'>";
		echo $row->desc;
		echo "</td>";
		echo "</tr>";
		
	}
	
	echo "</table>";
	echo "</div>";
}




?>