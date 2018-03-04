<?php get_header();  ?>
			<?php if ( have_posts() ) : ?>
		<div id="content-wrapper" class="wrapper clearfix">
		<h1 class="search-title text-center"><?php printf( __( 'Search Results for: %s', 'matraman-lite' ), get_search_query() ); ?></h1>
		<ul class="grid" id="grid">


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