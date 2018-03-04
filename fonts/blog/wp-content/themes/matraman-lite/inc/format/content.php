<article  id="post-<?php the_ID(); ?>" <?php post_class( 'post'); ?>>


	<div class="post-content clearfix">



				<?php matraman_lite_post_title_single();?>
							<div class="post-meta">	
								<?php matraman_lite_author(); ?>	
								<?php matraman_lite_date(); ?>	
							
							</div>

	  			<?php matraman_lite_post_type(); ?>
	  			<?php matraman_lite_post_thumbnail(); ?>
				<div class="post-entry">
				<?php matraman_lite_content(); ?>

				<div class="meta-bottom">

				<?php matraman_lite_category(); ?>
				<?php matraman_lite_tags(); ?>
				</div>

				</div>

			<?php get_template_part( 'inc/part/layout', 'meta' ); ?>
			
	</div><!-- post-content -->  


</article><!-- #post-<?php the_ID(); ?> -->