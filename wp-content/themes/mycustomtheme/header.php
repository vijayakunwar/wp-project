<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?> <!-- wp_head() will inject functions.php in header -->

</head>

<body>

    <header>
        <?php
        //to get menu in pages that was define in functions.php
        wp_nav_menu(
            array(
                'theme_location' => 'header-menu', // add location  
               // 'menu_class' => 'top-bar', // add custom nav CLASS  to use in CSS file
            )
        ); ?>
    </header>