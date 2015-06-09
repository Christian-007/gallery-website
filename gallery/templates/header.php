<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery | Home</title>

    <!-- Vendor CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    
    
</head>

<body id="page-top" data-spy="scroll" data-target="#myNavbar" ng-app="myApp" ng-controller="homeCtrl">
    
    <!-- Navigation for Desktop -->
    <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" id="menu-toggle" class="navbar-toggle collapsed">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#home">BRAND</i></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#gallery">Gallery</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a class="page-scroll" href="#credits">Credits</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <!-- Navigation for Mobile -->
    <a id="menu-toggle" class="btn btn-dark btn-lg button toggle"><i class="fa fa-bars"></i></a>
    <nav class="nav-sidebar">
        <ul class="sidebar-list">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="brand">
                <a class="page-scroll" href="#home">Brand</a>
            </li>
            <li>
                <a class="page-scroll" href="#about">About</a>
            </li>
            <li>
                <a class="page-scroll" href="#gallery">Gallery</a>
            </li>
            <li>
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
            <li>
                <a class="page-scroll" href="#credits">Credits</a>
            </li>
        </ul>
    </nav>