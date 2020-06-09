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
                <li><a class="page-scroll" href="#main">Home</a></li>
                <li><a class="page-scroll" href="#specs">Specs</a></li>
                <li><a class="page-scroll" href="#features">Features</a></li>
                <li><a class="page-scroll" href="#reviews">Reviews</a></li>
                <li><a class="page-scroll" href="#buy">Pricing</a></li>
                <li><a href="#buy" class="btn btn-nav page-scroll wow fadeInDown" data-wow-delay="0.3s"><span>Buy Now</span></a></li>
            </ul>
          </div>
        </div>
      </nav><!-- /.navbar-collapse -->

