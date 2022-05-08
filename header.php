
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    link font awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!--    link font awesome-->

<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>

<!-- start header -->
<header >
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="search-box">
                        <input type="text" placeholder="search for product" class="search-top-bar">
                        <span class="search-icon">  </span>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="top-bar-logo">
                        <h2> skyTeam </h2>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-end">
                    <div class="top-bar-menu">

                        <ul class="list-none top-header-icon">
                            <li><a href="#"> <i class="far fa-user"></i> </a></li>
                            <li><a href="#"> <i class="far fa-heart"></i> </a></li>
                            <li><a href="#"> <i class="far fa-shopping-cart"></i> </a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container ">
            <div class="row ">
                <div class="col d-flex justify-content-center ">
                    <nav class="main-menu">
                        <ul class="list-none">
                            <li><a href="#"> home </a></li>
                            <li><a href="#"> page </a></li>
                            <li><a href="#"> shop </a></li>
                            <li><a href="#"> feature </a></li>
                            <li><a href="#"> blog </a></li>
                            <li><a href="#"> contact us </a></li>
                            <li><a href="#"> about us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->