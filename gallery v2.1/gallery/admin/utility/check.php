<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];


	include('../connection/connection.php');

	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($username == $row['username'] AND $password == $row['password']){
		$_SESSION['user'] = $row['username'];
	}else{
		echo "Error! Wrong username or password";
		die();
	}

    /*while($row = mysql_fetch_array($result)){
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

    //echo json_encode($emparray);*/

	
	include('../connection/close_connection.php');	
?>
<script type="text/javascript">
	window.location = "../dashboard";
</script>