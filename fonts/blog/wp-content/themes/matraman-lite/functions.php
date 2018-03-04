<?php

define('MATRAMAN_LITE_DIR', get_template_directory_uri());
define('MATRAMAN_LITE_TEMPLATE_DIR', get_template_directory());

$my_theme = wp_get_theme();

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1170; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'matraman_lite_setup' ) ) :

	function matraman_lite_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );	
    	add_theme_support( 'html5', array( 'gallery', 'caption' ) );
    	load_theme_textdomain( 'matraman', MATRAMAN_LITE_TEMPLATE_DIR .'/languages' );
    	add_theme_support( "title-tag" );
		$defaults = array(
			'default-image'          => get_template_directory_uri() . '/img/default-head.jpg',
			'uploads'                => true,
			'random-default'         => false,
			'header-text'            => false,

		);
		add_theme_support( 'custom-header', $defaults );
}
endif;
add_action( 'after_setup_theme', 'matraman_lite_setup' );


/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function matraman_lite_scripts() {

//All necessary CSS
wp_enqueue_style( 'matraman-bootstrap', MATRAMAN_LITE_DIR .'/css/bootstrap.min.css', array(), null );
wp_enqueue_style( 'matraman-plugin-css', MATRAMAN_LITE_DIR .'/css/plugin.css', array(), null );
wp_enqueue_style( 'matraman-style', get_stylesheet_uri(), array( 'matraman-bootstrap','matraman-plugin-css' ) );
wp_enqueue_style( 'matraman-font', MATRAMAN_LITE_DIR .'/css/font.css', array(), null );

//All Necessary Script
wp_enqueue_script( 'matraman-modernizr', MATRAMAN_LITE_DIR. '/js/modernizr.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'matraman-respond', MATRAMAN_LITE_DIR. '/js/respond.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'matraman-fitvids', MATRAMAN_LITE_DIR. '/js/fitVids.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'matraman-classie', MATRAMAN_LITE_DIR. '/js/classie.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'matraman-smartmenus', MATRAMAN_LITE_DIR. '/js/smartmenus.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'matraman-loopjs', MATRAMAN_LITE_DIR. '/js/loopjs.js', array( 'jquery', 'masonry' ), '', true );
wp_enqueue_script( 'matraman-main-js', MATRAMAN_LITE_DIR. '/js/main.js', array( 'jquery' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'matraman_lite_scripts' );

function matraman_lite_admin_scripts() {

			wp_enqueue_style('matraman-lite-admin', MATRAMAN_LITE_DIR . '/admin/admin.css');
}

add_action('admin_enqueue_scripts', 'matraman_lite_admin_scripts');

/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
register_nav_menu( 'header-menu', 'Header Menu' ); 

//TOP MENU
function matraman_lite_top_nav_menu(){
  wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container'       => 'ul',
   'menu_class'      => 'sm sm-clean',
    'fallback_cb'  => 'matraman_lite_header_menu_cb'
  ));
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET
function matraman_lite_header_menu_cb() {
  echo '<ul id="menu-top-menu" class="sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}


/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/



/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function matraman_lite_pagination($pages = '', $range = 2)
{  
		 $showitems = ($range * 2)+1;  

		 global $paged;
		 if(empty($paged)) $paged = 1;

		 if($pages == '')
		 {
				 global $wp_query;
				 $pages = $wp_query->max_num_pages;
				 if(!$pages)
				 {
						 $pages = 1;
				 }
		 }   

		 if(1 != $pages)
		 {
				 echo "<div class='pagination col-md-12 text-center'>";
				 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
				 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

				 for ($i=1; $i <= $pages; $i++)
				 {
						 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						 {
								 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
						 }
				 }

				 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
				 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				 echo "</div>\n";
		 }
}




/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/custom.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/navigation.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/comment.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/themeta.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/thecontent.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/inc/function/customizer.php' );
require_once( MATRAMAN_LITE_TEMPLATE_DIR . '/admin/admin.php' );