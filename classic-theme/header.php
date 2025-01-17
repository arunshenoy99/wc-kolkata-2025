<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="site-navigation-wrapper">
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                ));
                ?>
            </nav>
            <div class="cta-button">
                <a href="<?php echo esc_url(home_url('/register')); ?>" class="btn btn-primary">Tickets</a>
            </div>
            </div>
        </div>
    </header>