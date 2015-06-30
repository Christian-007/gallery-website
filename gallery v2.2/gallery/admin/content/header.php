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
    <link href="../css/imgviewer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    
    
</head>

<body>
    
    <!-- Navigation for Desktop -->
    <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top nav-custom" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" id="menu-toggle" class="navbar-toggle collapsed custom-collapse" data-toggle="collapse" data-target="#navbar">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#home"><i class="fa fa-user"></i> Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-top-right navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        User <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="utility/logout.php"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                    </ul>
                </li>
                <li class="inactive">
                    <a href="dashboard">
                        <i class="fa fa-tachometer"></i> Dashboard
                    </a>
                </li>
                <li class="inactive">
                    <a href="homeSlider">
                        <i class="fa fa-caret-square-o-right"></i> Home Slider
                    </a>
                </li>
                <li class="inactive">
                    <a href="about">
                        <i class="fa fa-pencil"></i> About
                    </a>
                </li>
                <li class="inactive">
                    <a href="gallery">
                        <i class="fa fa-picture-o"></i> Gallery
                    </a>
                </li>
                <li class="inactive">
                    <a href="upload">
                        <i class="fa fa-upload"></i> Media Upload
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
        
    </nav>

    <div class="navbar navbar-default sidebar">
        <ul class="sidebar-list">
            <li>
                <a href="dashboard" class="dashboard-nav">
                    <i class="fa fa-tachometer"></i> 
                    <p class="text-center">Dashboard</p>
                </a>
            </li>
            <li>
                <a href="homeSlider" class="slider-nav">
                    <i class="fa fa-caret-square-o-right"></i>
                    <p class="text-center">Home Slider</p>
                </a>
            </li>
            <li>
                <a href="about" class="about-nav">
                    <i class="fa fa-pencil"></i>
                    <p class="text-center">About</p>
                </a>
            </li>
            <li>
                <a href="gallery" class="demo gallery-nav">
                    <i class="fa fa-picture-o"></i>
                    <p class="text-center">Gallery</p>  
                </a>
            </li>
            <li>
                <a href="upload" class="upload-nav">
                    <i class="fa fa-upload"></i>
                    <p class="text-center">Media Upload</p>
                </a>
            </li>
        </ul>
    </div>