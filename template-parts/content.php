<?php
/**
 * Template part for displaying posts.
 *
 * @package fedoraid
 */

?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card hoverable">
		<div class="card-image">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
			<span class="card-title"><?php the_title( sprintf( '<h5><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?></span>
		</div>
		<div class="card-content">
			<div class="portfolio-overlay">
				<ul class="collection">
					<li class="collection-item avatar text-left"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?><span class="title blue-grey-text text-darken-3"> <?php the_author(); ?></span>
						<p class="blue-grey-text text-darken-3"><?php the_category() ?></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
