<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <section class="container top-bar">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <div class="logo">

                            </div>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->

                            <?php wp_nav_menu(array(
                                'theme_location' => 'wp_villa_main_menu',
                                'container' => '',
                                'menu_class'     => 'nav',
                            )) ?>

                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </section>
        </header>
        <!-- ***** Header Area End ***** -->