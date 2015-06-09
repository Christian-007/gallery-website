<?php

	include('../connection/connection.php');
	$query = "SELECT * FROM images";
	$result = mysql_query($query);

    while($row = mysql_fetch_array($result)){
    	$emparray[] = array(
			'title' => $row['title'],
			'description' => $row['description'],
			'img_name' => $row['image_name']
		);
    }
	//write to json file
	$relative_path = '../json/empdata.json';
    $fp = fopen($relative_path, 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    //echo json_encode($emparray);
	
	include('../connection/close_connection.php');	
?>
<script type="text/javascript">
	window.location = "../gallery";
</script>