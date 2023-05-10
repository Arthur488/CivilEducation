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
    <link rel="shortcut icon" href="/static/images/Logo.png" type="images/x-icon"/>

    <!--====== CSS Here ======-->
    <? require_once("mvc/view/include_css.php"); ?>

</head>

<body>

<!-- preloader  -->
<? require("mvc/view/preloader.php"); ?>

<!-- Header -->
<? require("mvc/view/header.php"); ?>


<!-- START PORTFOLIO DESIGN AREA -->
<section class="portfolio-area pt-120 pb-90">

    <div class="container-fluid row justify-content-center align-items-center pb-25">
        <div class="text-center">
            <h3 class="title"><?=$pageHeaderTitle?></h3>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <? foreach($articles as $article): ?>

            <div class="col-lg-6 col-md-6 grid-item cat2 cat4">
                <div class="portfolio-item mb-30">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-image">
                            <img src="resources/static/images/resource_psychology.jpg" alt="" />
                            <div class="view-icon">
                                <a class="popup-image" href="<?=$article['link']?>">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-caption">
                            <h4><?=$article['title']?></h4>
                            <p><?=$article['content']?></p>
                        </div>
                    </div>
                </div>
            </div>

            <? endforeach; ?>

        </div>
    </div>
</section>
<!-- / END PORTFOLIO DESIGN AREA -->

<!-- Footer -->
<? require("mvc/view/footer.php"); ?>

<!--========= JS Here =========-->
<? require_once("mvc/view/include_js.php"); ?>
</body>

</html>