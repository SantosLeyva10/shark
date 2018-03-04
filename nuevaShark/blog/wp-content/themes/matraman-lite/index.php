<?php get_header();  ?>

		<div id="content-wrapper" class="wrapper clearfix">


		<ul class="grid" id="grid">

		<?php while ( have_posts() ) : the_post(); 
		
			get_template_part( 'inc/format/loop', get_post_format() );

		endwhile; // end of the loop. ?>	
		</ul>

		<?php matraman_lite_content_nav($pages = '', $range = 2); ?>



		</div><!-- content-wrapper -->



<?php get_footer(); ?>