<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="Tom">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba ByteBerry</title>

        <!-- Load Lottie library -->
        <script src="https://cdn.jsdelivr.net/npm/lottie-web@latest"></script>

        <!-- Load your custom script -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/flower-animation.js"></script>



        <?php wp_head(); ?>
    </head>

    <body>

        <header class="header">
            <a href="" class="logo">LOGO</a>

            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_navbar',
                    'menu_class' => 'header-menu', 
                ));
            ?>

            </nav>

        </header>