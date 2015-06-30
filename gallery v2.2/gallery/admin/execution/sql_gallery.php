<?php
	$image = $_FILES['image'];
	$image_name = $image['name'];
	$upload_name = $image['tmp_name'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$category = $_POST['category'];

	$option = $_POST['option'];

	echo $title;
	echo '<br>';
	echo $description;
	echo '<br>';
	echo $category;
	echo '<br>';
	echo $option;

	die();
	if(move_uploaded_file($upload_name,'../../images/'.$image_name))
	{
		include('../connection/connection.php');

		// Inserting data to mysql database
		$insert_query = "INSERT INTO images (title, description, category, image_name) VALUES('$title', '$description', '$category', '$image_name')";
		$insert_result = mysql_query($insert_query);

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
	}
?>
<script type="text/javascript">
	//alert("Successfully add images!");
	window.location = '../gallery';
</script>