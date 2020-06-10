<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package root-theme
 */


$navigation = wp_get_nav_menu_items(2);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">root </a>
          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<?php 
				
				foreach ($navigation as $key => $value) { 
					
					if($value->post_title == 'Buy Now'){ ?>

					<li><a href="<?php echo $value->url; ?>" class="btn btn-nav page-scroll wow fadeInDown" data-wow-delay="0.3s"><span><?php echo $value->post_title; ?></span></a></li>

					<?php
					}
					else{ ?>
						<li><a class="page-scroll" href="<?php echo $value->url; ?>"><?php echo $value->post_title; ?></a></li>
					<?php
					}
					?>
					
				<?php
				
				}
				
				?>
                
                
            </ul>
          </div>
        </div>
      </nav><!-- /.navbar-collapse -->

