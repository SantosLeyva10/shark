<?php 

function matraman_lite_background_header() {


global $post, $paged, $page;

$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );


if(is_singular() && has_post_thumbnail()) {
echo '<div class="hero-section-single">';
echo '<div class="hero-section-single-image" style="background-image:url('.$image_url[0].');">';
echo '</div></div>';

}

  elseif(is_single() && !has_post_thumbnail()) {
      echo '<div class="hero-section-single"></div>';
  }

    elseif(is_page() && !has_post_thumbnail()) {
    echo '<div class="hero-section">';
    matraman_lite_header_default();
    echo '</div>';
  }



  elseif(!is_singular() ) {
    echo '<div class="hero-section">';
    matraman_lite_header_default();
    echo '</div>';
  }

}


function matraman_lite_header_default() { 

  echo '<div class="header-default">'; ?>

 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<?php  echo '</div>';

}