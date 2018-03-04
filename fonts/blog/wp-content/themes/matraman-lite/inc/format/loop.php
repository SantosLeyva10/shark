<li  id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-6'); ?>>

	<?php matraman_lite_post_thumbnail(); ?>
	<div class="post-content clearfix">

				<div class="post-entry">

				<?php matraman_lite_post_title();?>

							<div class="post-meta">	
								<?php matraman_lite_author(); ?>	
								<?php matraman_lite_date(); ?>
							</div>

	  			<?php matraman_lite_post_type(); ?>

				<?php matraman_lite_content(); ?>

				<div class="meta-bottom">
				<?php matraman_lite_comments(); ?>

				<?php matraman_lite_category(); ?>
				<span class="more-button pull-right"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more"><?php _e( 'Continue', 'matraman-lite' ); ?></a></span>	
				</div>

				</div>

			</div>
			<?php get_template_part( 'inc/part/layout', 'meta' ); ?>
			
	</div><!-- post-content -->  


</li><!-- #post-<?php the_ID(); ?> -->