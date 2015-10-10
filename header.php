<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fedoraid
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top:0px !important ;">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fedora-id' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="header-wrapper">
						<div class="<?php get_site_url(); ?> wp-content/themes/fedora-id/site-branding">
							<div class="logo">
								<img src="http://fedora.or.id/wp-content/uploads/2015/06/logo-fedora.png" />
							</div>
							<div class="indonesia">Indonesia</div>
							<p><em id="fedora-motto">Freedom, Friends, Features, First</em></p>
							<p><a class="waves-effect waves-light btn-large light-blue lighten-2" href="https://getfedora.org/" target="_blank"><i class="mdi-file-cloud-download left"></i>Download Fedora 22</a></p>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
