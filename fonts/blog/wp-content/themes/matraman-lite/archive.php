<?php get_header();  ?>

		<div id="content-wrapper" class="wrapper clearfix">
			<h2 class="archive-title text-center"><?php
			    printf( __( 'Archives: %s', 'matraman-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );
			?></h2>
		<ul class="grid" id="grid">



			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); 


					get_template_part( 'inc/format/loop', get_post_format() );

				endwhile; ?>
				
			<?php else : ?>

			<?php get_template_part( 'inc/format/loop', 'no-result' ); ?>

			<?php endif; ?>
		</ul>
		<?php matraman_lite_pagination($pages = '', $range = 2); ?>


		</div><!-- content-wrapper -->


<?php get_footer(); ?>