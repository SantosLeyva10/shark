<?php 


//EXCERPT

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


function matraman_lite_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'matraman_lite_custom_excerpt_length', 999 );

function matraman_lite_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'matraman_lite_new_excerpt_more');


function matraman_lite_excerpt(){
 global $post;
	?> 
	<div class="akmanda-excerpt"> 
	<?php the_excerpt();?>


<?php }

//POST TITLE

function matraman_lite_post_title(){ ?> 
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-title">
						<h2><?php the_title(); ?></h2>	
						</a>				 

<?php }


function matraman_lite_post_title_single(){ ?> 
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-title-single">
						<h1><?php the_title(); ?></h1>	
						</a>				 

<?php }

function matraman_lite_page_title(){ 

global $post, $paged, $page;

$hide_title = get_field( 'hide_title' );

if($hide_title !== 'yes') {	?>

<div class="page-title text-center">
	<h1><?php the_title(); ?></h1>
	<div class="bord"></div>
</div>




<?php } }

//POST THUMBNAIL

function matraman_lite_post_thumbnail(){

if ( has_post_thumbnail()) { ?>

		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">   <div class="post-thumb">
			<?php the_post_thumbnail(); ?>
			</div><!-- post thumb -->
		</a>

	<?php } 

else {
	echo  '<div class="no-thumb"></div>';
}

} 

function matraman_lite_post_thumbnail_frame(){

if ( has_post_thumbnail()) { ?>

		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >   <div class="post-thumb">
			<?php the_post_thumbnail(); ?>
			</div><!-- post thumb -->
		</a>

	<?php } else { ?>	
		<div class="no-post-thumb"></div> <?php
		} ?>

<?php } 

//CONTENT

function matraman_lite_content() {
	global $post;

		if (is_singular() && $post->post_content !== '') { ?>

					<div class="inner-content">
					<?php 
					the_content();
					wp_link_pages();

					 ?>
					</div>


			 <?php } if (!is_singular()) { 
						matraman_lite_excerpt();
					} 
}

//COMMENT


function matraman_lite_comment_checker() {
	global $post;

	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
}



function matraman_lite_portfolio_skill() {

global $post;

$terms = get_the_terms( $post->ID, 'portfolio-skill' );
										
				if ( $terms && ! is_wp_error( $terms ) ) : 

					$portfolio_skill = array();

					foreach ( $terms as $term ) {
						$portfolio_skill[] = $term->name;
					}

					echo "<ul><li>";
										
					$on_skill =  join( "</li><li>", $portfolio_skill );
				?>

					<?php echo $on_skill;
endif;

}


function matraman_lite_portfolio_category() {

global $post;

$terms = get_the_terms( $post->ID, 'portfolio-category' );
										
				if ( $terms && ! is_wp_error( $terms ) ) : 

					$portfolio_skill = array();

					foreach ( $terms as $term ) {
						$portfolio_skill[] = $term->name;
					}

					echo "<ul><li>";
										
					$on_skill =  join( "</li><li>", $portfolio_skill );
				?>

					<?php echo $on_skill;
endif;

}