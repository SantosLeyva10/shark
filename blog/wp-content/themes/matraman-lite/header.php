<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	
<title><?php wp_title( '|', true, 'right' ); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body <?php body_class() ;?>>

			<!-- Start of Header -->
			<header id="header" class="site-header no-border clearfix">
			<div class="container">
			<div class="row">
				<div class="logo pull-left"><div class="logo-title">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>
    </div></div>

				<!-- Start of Menu  -->
				<nav id="main-menu" class="menu pull-right">
									<?php matraman_lite_top_nav_menu(); ?>
				</nav>
				<!-- End of Menu  -->
				</div>
				</div>

				<?php matraman_lite_background_header(); ?>

			</header>
			<!-- End of Header -->




<div id="main" class="site-main container clearfix">