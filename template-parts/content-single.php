<?php
/**
 * Template part for displaying single posts.
 *
 * @package fedoraid
 */

?>

<div class="container">
	<div class="row">
		<div class="col s12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="featured-image-wrapper-post">
					<?php the_post_thumbnail('large'); ?>
				</div>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fedora-id' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php fedora_id_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

