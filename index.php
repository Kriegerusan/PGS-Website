<?php

require_once 'src/controllers/HomeController.php';
require_once 'src/controllers/ProjectController.php';

$rootUrl = $_SERVER['REQUEST_URI'];

$urlArray = mb_split("/",$rootUrl);

// echo $urlArray[1];
// echo $urlArray[2];
// echo $urlArray[3];

switch($urlArray[2]){
    case "home" : 
        $currentPage = new HomeController('HomePage');
        $currentPage->index();
        break;
    
    case "projects" : 
        $currentPage = new ProjectController('Projects');
        if(isset($urlArray[3])) {

            switch($urlArray[3]){

                case 'form' :
                    $currentPage = new ProjectController('Projects');

                    $currentPage->form();
                    break;

                default : 
                    header('location: ../home');
                    exit();
                    break;
            }
        }else {
            $currentPage->index();
        }
        break;

    default : 
        echo "no page here";
        break;
}