<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EfectoVirtual
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="row">
			<div class="columns medium-3">
				<p class="tituloFooter">Servicios</p>
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'serviciosfooter' ) ); ?>
				</nav>
			</div>
			<div class="columns medium-3">
				<p class="tituloFooter">Efecto Virtual</p>
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'evfooter' ) ); ?>
				</nav>
			</div>
			<div class="columns medium-3">
				<p class="tituloFooter">Páginas web</p>
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'webfooter' ) ); ?>
				</nav>
			</div>
			<div class="columns medium-3">
				<p class="tituloFooterSearch">Obtenga Noticias de EfectoVirtual</p>
				<input type="text" name="" value="">
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
