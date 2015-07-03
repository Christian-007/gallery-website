<?php
	$imgArray = $_REQUEST['imgArray'];
	$category = $_POST['category'];
	$active = "true";

	/*print_r($imgArray);
	echo '<br>';
	echo $category;

	die();*/
	include('../connection/connection.php');

	foreach($imgArray as $img)
	{

		// Updating data to mysql database
		$update_query = "UPDATE images SET isActive = 'true'  WHERE image_name = '$img' ";
		$update_result = mysql_query($update_query);
	}

	// Select all data to be written to .json file
	$select_query = "SELECT * FROM images";
	$select_result = mysql_query($select_query);

	// Initializing the data as an array
    while($row = mysql_fetch_array($select_result)){	
    	$dataArray[] = array(
			'title' => $row['title'],
			'description' => $row['description'],
			'category' => $row['category'],
			'img_name' => $row['image_name'],
			'isActive' => $row['isActive']
		);
    }

	// Write the array to json file
	$relative_path = '../api/data.json';
    $fp = fopen($relative_path, 'w');
    fwrite($fp, json_encode($dataArray));
    fclose($fp);

	include('../connection/close_connection.php');
?>