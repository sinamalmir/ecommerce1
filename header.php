
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
<body <?php body_class(); ?> >

<?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
?>

<!-- start header -->
<header >

    <?php
        get_template_part('template/header/top-header');
        get_template_part('template/header/bottom-header');
     ?>

</header>
<!-- end header -->

<!-- if u have a modal search or anything u can add new file about that like up code -->
 


