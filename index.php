<?php 

    $cname = $_GET['c'] ?? 'index';

    const BASE_URL = '/CivilEducation/';

    $uri = $_SERVER['REQUEST_URI'];
    $badUrl = BASE_URL . 'index.php';

    if(strpos($uri, $badUrl) === 0){
        require_once("mvc/view/404.php");
        return;
    }

    require_once('mvc/core/system.php');

    $path = "mvc/controllers/$cname.php";

    if(checkControllerName($cname) && file_exists($path)){
        require_once($path);
    }else {
        header('HTTP/1.1 404 Not Found');
        require_once("mvc/view/404.php");
    }

?>