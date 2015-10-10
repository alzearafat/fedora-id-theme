<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fedoraid
 */

get_header(); ?>

	<div class="blog-inde-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<div class="strike">
				               	<span><h4>BLOG</h4></span>
				            </div>
				        </div>
				    </div>
				</div>
				<?php if ( have_posts() ) : ?>
					<div class="container">
						<div class="row">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="col s12 m4 l4 small-screen-margin-top">
									<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<?php // the_posts_navigation(); ?>
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
					</div>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
