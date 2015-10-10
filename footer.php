<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fedoraid
 */

?>

	</div><!-- #content -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=639658039499237";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-grid">
			<div class="container">
				<div class="row">
					<div class="col s12 m4 l4">
						<div class="footer-widget">
							<?php get_sidebar(); ?>
						</div>
					</div>
					<div class="col s12 m4 l4">
					<h5 style="text-align: center;">Tetap Terhubung</h5>
						<div class="fb-page" data-href="https://www.facebook.com/fedora.indonesia" data-width="350" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/fedora.indonesia"><a href="https://www.facebook.com/fedora.indonesia">Fedora Indonesia</a></blockquote></div></div>
					</div>
					<div class="col s12 m4 l4">
					<div class="image-footer">
							<h5>Didukung Oleh</h5>	
							<img src="https://labs.fedoraproject.org/static/images/sponsors/sidebar/redhat.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<div class="site-info">
							<p class="copyright-footer">&copy; 2006-2015 Komunitas Fedora Indonesia</p>
							<p>Theme dibuat dengan <i class="tiny material-icons">favorite</i> oleh <a href="http://zealab.com">Zea</a>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
