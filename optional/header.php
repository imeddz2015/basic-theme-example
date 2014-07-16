<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <title><?php wp_title(''); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

        <div id="header">
            <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h2>
                <?php bloginfo('description'); ?>
            </h2>
            <div class="main-navigation">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
            </div>
        </div><!-- /#header -->
        <div class="wrapper">