<?php get_header();?>
		
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
		
<?php get_footer();?>