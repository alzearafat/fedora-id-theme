<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fedoraid
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col s8">
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
									the_archive_title( '<h4 class="page-title">', '</h4>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content-archives', get_post_format() );
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
					<div class="col s4">
						<div class="sidebar-archives">
							<?php get_sidebar(); ?>
						</div>
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


<?php get_footer('archives'); ?>
