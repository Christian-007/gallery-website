<?php
    
    include('content/header.php');

    // if(isset($_GET['page']))
    // {
    //     $page = $_GET['page'];
    // }else{
    //     $page = 'add'; 
    // }
    
    // switch($page){
    //     case 'dashboard':
    //         include('content/content_dashboard.php');
    //         break;
    //     case 'gallery':
    //         include('content/content_gallery.php');
    //         break;              
    //     default:
    //         include('content/content_dashboard.php');
    //         break;
    // }   

    $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
    $elements = explode('/', $path);                // Split path on slashes
    //print_r($elements);
    //die();
    switch ($elements[2]) {                         // Check the third element, after the second directory
        case '':
            include('content/content_dashboard.php');
            break;

        case 'dashboard':
            include('content/content_dashboard.php');
            break;
        
        case 'gallery':
            include('content/content_gallery.php');
            break;

        case 'homeSlider':
            include('content/content_slider.php');
            break;

        default:
            header('Location: ' . $_SERVER["REQUEST_URI"] . '?notFound=1');
            die();
            echo "URL NOT FOUND";
            break;
    }

    include('content/footer.php');

?>
    

    
    
    

   