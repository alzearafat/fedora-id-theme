<?php
/**
 * The template for displaying search results pages.
 *
 * @package fedoraid
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'fedora-id' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );
								?>

							<?php endwhile; ?>

							<div class="nav-button">
								<div class="row">
									<div class="col s6">
										<?php if ( get_next_posts_link() ) : ?>
								            <div class="waves-effect waves-light btn-large"><?php next_posts_link( __( 'Older posts', 'fedoraid' ) ); ?><i class="mdi-hardware-keyboard-arrow-left left"></i>
								            </div>
							            <?php endif; ?>
							        </div>
							        <div class="col s6">
							            <?php if ( get_previous_posts_link() ) : ?>
								            <div class="waves-effect waves-light btn-large"><?php previous_posts_link( __( 'Newer posts', 'fedoraid' ) ); ?><i class="mdi-hardware-keyboard-arrow-right right"></i>
								            </div>
							            <?php endif; ?>
							        </div>
							    </div>
							</div>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
				<a class="btn-floating btn-large blue" href="<?php echo site_url(); ?>" title="Back to Home">
					<i class="mdi-action-home"></i>
				</a>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
