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
    
    <!-- Navigation for Desktop -->
    <nav id="myNavbar" class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#home">BRAND Admin</i></a>
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
                        <li><a href="#"><i class="fa fa-sign-out"></i> Sign Out</a></li>
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
                    <a href="#">
                        <i class="fa fa-pencil"></i> About
                    </a>
                </li>
                <li class="inactive">
                    <a href="gallery">
                        <i class="fa fa-picture-o"></i> Gallery
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
        
    </nav>

    <div class="navbar navbar-default sidebar">
        <ul class="sidebar-list">
            <li class="active">
                <a href="dashboard">
                    <i class="fa fa-tachometer"></i> Dashboard
                    <span class="float"><i class="fa fa-chevron-right"></i></span>
                </a>
            </li>
            <li>
                <a href="homeSlider">
                    <i class="fa fa-caret-square-o-right"></i> Home Slider
                    <span class="float"><i class="fa fa-chevron-right"></i></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-pencil"></i> About
                    <span class="float"><i class="fa fa-chevron-right"></i></span>
                </a>
            </li>
            <li>
                <a class="demo" href="gallery">
                    <i class="fa fa-picture-o"></i> Gallery
                    <span class="float"><i class="fa fa-chevron-right"></i></span>
                </a>
            </li>
        </ul>
    </div>