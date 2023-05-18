<?php 

    require_once('mvc/model/articles.php');

    $params['category'] = $_GET['category'] ?? null;

    if(!$params['category']){
        // 404
        exit();
    }

    $pageHeaderTitle;

    switch($params['category']){
        case 'Ukraine': 
            $pageHeaderTitle = 'Сторінка морально-психологічної допомоги для військових в Україні';
            break;
        case 'World': 
            $pageHeaderTitle = 'Сторінка морально-психологічної допомоги для військових в Світі';
            break;
        case 'Chernihiv': 
            $pageHeaderTitle = 'Сторінка морально-психологічної допомоги для військових в Чернігові';
            break;
        case 'Selfhelp': 
            $pageHeaderTitle = 'Блок самодопомоги для військових';
            break;
        default: 
        // 404;
    }

    $articles = getArticlesByCategory($params);

    require('mvc/view/articles.php');

?>