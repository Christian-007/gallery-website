<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery | Admin</title>

    <!-- Vendor CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    
    
</head>
<body>
    <div class="wrapper">
        <div class="center">
        	<div class="container">
                <div class="text-center admin-icon"><i class="fa fa-user fa-5x"></i></div>
        		<form class="form-signin" action="utility/check.php" method="post">
        	    	<div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <p class="help-block text-danger"></p>
                    </div>
                    <button type="submit" class="btn btn-success login">Submit</button>
        	    </form>
                <div class="text-center back">
                    <a class="return" href="#"><i class="fa fa-long-arrow-left"></i> back to Gallery Viewer</a>
                    |
                    <a href="">Forgot your password?</a>
                </div>
        	</div>
        </div>
    </div>
