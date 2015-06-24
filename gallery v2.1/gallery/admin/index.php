<?php
    
    session_start();

    $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
    $elements = explode('/', $path);                // Split path on slashes
    //print_r($elements);
    //die();

    $message = "you are going to be logged out";
    if(isset($_SESSION['user'])){

        if($elements[2] != ""){
            include('content/header.php');
        }

        switch ($elements[2]) {                         // Check the third element, after the second directory
            case '':
                echo "<script type='text/javascript'>";
                echo "alert('$message');";
                echo "window.location = 'utility/logout.php'; ";
                echo "</script>";
                break;

            case 'dashboard':
                include('content/content_dashboard.php');
                break;

            case 'about':
                include('content/content_about.php');
                break;
            
            case 'gallery':
                include('content/content_gallery.php');
                break;

            case 'homeSlider':
                include('content/content_slider.php');
                break;

            case 'upload':
                include('content/content_upload.php');
                break;

            default:
                header('Location: ' . $_SERVER["REQUEST_URI"] . '?notFound=1');
                die();
                echo "URL NOT FOUND";
                break;
        }
    }else{
        switch ($elements[2]) {                         // Check the third element, after the second directory
            case '':
                include('content/adminLogin.php');
                break;

            default:
                include('content/error.html');
                die();
                break;       
        }
    }

    include('content/footer.php');

?>