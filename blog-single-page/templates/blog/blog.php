
<article id="post-<?php the_ID(); ?>" <?php (is_sticky()) ? post_class('blog-container stick_post') : post_class('blog-container'); ?>>
	
	<div class="blog-container-inner">
		<?php do_action('pgl_post_before_content'); ?>
		<h2 class="blog-title">
			<?php if(is_sticky()){ ?>
				<span class="sticky pull-right"><?php _e('Sticky','accessories'); ?></span>
			<?php } ?>
			
				<?php the_title(); ?>
			
		</h2>
		<?php get_template_part( 'templates/single/meta' ); ?>
		<div class="blog-content">
			<?php echo the_content(); ?>
			<?php get_template_part( 'templates/sharebox' ); ?>
		</div>
	
	</div>
</article>