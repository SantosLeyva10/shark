<?php

wp_enqueue_script( 'matraman-classie', MATRAMAN_LITE_DIR. '/js/classie.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'matraman-photostack', MATRAMAN_LITE_DIR. '/js/photostack.js', array( 'jquery' ), '', true );

$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
 
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'showposts'=>4,  // Number of related posts that will be shown.
'caller_get_posts'=>1
);
 
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
echo '<div id="relatedposts" class="clearfix"><section id="photostack-3" class="photostack"><h3>Related Posts</h3>
				<div class="photostack-wrapper">';
while ($my_query->have_posts()) {
$my_query->the_post();
?>
  
<?php
if ( has_post_thumbnail() ) { ?>
<?php if ( has_post_thumbnail()) { ?>
			<figure>
				<a href="<?php the_permalink(); ?>" class="photostack-img"><?php echo get_the_post_thumbnail( $post->ID, 'matraman-photostack' ); ?></a>
				<figcaption>
					<h2 class="photostack-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo get_the_date(); ?></p>
				</figcaption>
			</figure>
	<?php }}}




	$featuredtag = get_tag_id_by_name('feature');

	// The Query
	$args2 = array(
		'tag__in' => $featuredtag,
		'post__not_in' => array($post->ID),

	);
	$query1 = new WP_Query( $args2 );

	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post(); ?>
		<?php if ( has_post_thumbnail()) { ?>
			<figure data-dummy>
				<a href="<?php the_permalink(); ?>" class="photostack-img"><?php echo get_the_post_thumbnail( $post->ID, 'matraman-photostack' ); ?></a>
				<figcaption>
					<h2 class="photostack-title"><?php the_title(); ?></h2>
					<p><?php echo get_the_date(); ?></p>
				</figcaption>
			</figure>
	<?php }}

	wp_reset_postdata();
?>
  
<?php

echo '</div></div></section>';
}
}
wp_reset_query();
?>