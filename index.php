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
		
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(is_single()):?>
					<h1><?php the_title(); ?></h1>
					<?php else:?>
					<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
					<?php endif;?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		
		<?php get_sidebar(); ?>
		
		</div><!-- /#wrapper -->
		<div id="footer">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?> All Rights Reserved
		</div><!-- /#footer -->

</body>
</html>