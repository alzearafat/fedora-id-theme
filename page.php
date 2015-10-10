<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fedoraid
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php endwhile; // End of the loop. ?>
					</div>
				</div>
			</div>

			<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
				<a class="btn-floating btn-large blue" href="<?php echo site_url(); ?>" title="Back to Home">
					<i class="mdi-action-home"></i>
				</a>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
