<?php
/**
 * The template for displaying all single posts.
 *
 * @package fedoraid
 */

get_header('post'); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });        
</script>

<div class="parallax-container">
    <div class="parallax"><img src="http://fedora.or.id/wp-content/themes/fedora-id/assets/imgs/single-bg.png" /></div>
    	<header class="entry-header-post animated fadeInUp" id="post-title-animate">
			<?php the_title( '<h1 class="entry-title"><b>', '</b></h1>' ); ?>
			<div class="entry-meta-single">
				<?php fedora_id_posted_on(); ?>
				<i class="mdi-action-face-unlock"></i><a href="mailto:<?php echo get_the_author_meta( 'user_email' ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
</div>

<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="single-post-body">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						 if ( comments_open() || get_comments_number() ) :
							comments_template();
						 endif;
					?>

					<?php endwhile; // End of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large blue" href="<?php echo site_url(); ?>" title="Back to Home">
		<i class="material-icons">home</i>
	</a>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="http://fedora.or.id/wp-content/uploads/2015/06/F20-alpha-wallpaper-tv-wide-min.png" /></div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer('archives'); ?>
