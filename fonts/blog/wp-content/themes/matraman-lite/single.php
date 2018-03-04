<?php get_header(); ?>


	<div id="content-wrapper" class="wrapper">
	<div class="row">
	



		<?php while ( have_posts() ) : the_post(); 
		
			get_template_part( 'inc/format/content', get_post_format() );

		endwhile; // end of the loop. ?>		




</div>
		</div><!-- content-wrapper -->


<?php get_footer(); ?>