<?php


    require_once(__DIR__ . '../autoload.php');



$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);











    // if($_SERVER['REQUEST_URI'] == '/page1')
    
    //     {

    //         $title = "page 1";
    //         include(__DIR__ . '/../views/page.php')

    //     }
        
    // elseif ($_SERVER['REQUEST_URI'] == '/page2')
        
    //     {

    //         $title = "page 2";
    //         include(__DIR__ . '/../views/page.php');

    //     }
        
    // else
        
    //     {

    //         $title = "404 page not found";
    //         include(__DIR__ . '/../views/page.php');

    //     }