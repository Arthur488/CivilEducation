<!doctype html>
<html class="no-js" lang="en">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Psycho Aid Help - Site</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="resources/static/images/Logo.png" type="images/x-icon"/>

    <!--====== CSS Here ======-->
    <? require_once("mvc/view/include_css.php"); ?>

</head>

<body>

<!-- preloader  -->
<? require("mvc/view/preloader.php"); ?>

<!-- Header -->
<? require("mvc/view/header.php"); ?>


<!-- START PORTFOLIO DESIGN AREA -->
<section class="portfolio-area pt-120 pb-90 ml-2 mr-2">

    <div class="container-fluid row justify-content-center align-items-center pb-25">
        <div class="text-center">
            <h3 class="title"><?=$pageHeaderTitle?></h3>
        </div>
    </div>

    <? foreach($articles as $article): ?>

    <div class="container box mb-50">

        <div class="row pt-3 mb-2">
            <a href="<?=$article['link']?>">
                <div class="col-1 text-center">
                    <i class="fas fa-solid fa-link"></i>
                </div>
            </a>
            <div class="col-11 text-center">
                <h4 class="section-title shape"><strong><?=$article['title']?></strong></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-2">
                <?=$article['content']?>
            </div>
        </div>
    </div>
        
    <? endforeach; ?>

</section>

<!-- Header -->
<? require("mvc/view/footer.php"); ?>

<!--========= JS Here =========-->
<? require_once("mvc/view/include_js.php"); ?>
</body>

</html>