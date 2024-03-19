<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="Tom">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba ByteBerry</title>



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