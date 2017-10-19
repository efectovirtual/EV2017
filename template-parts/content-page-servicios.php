<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EfectoVirtual
 */

?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="banner-page-general">

			<div class="banner-img-servicio"
				style="background: #3c3e40 url(<?php print_r($thumb[0]); ?>)
				no-repeat; background-position: center center; background-size: cover;
				">

				<div class="banner-texto-servicio">
					<div class="row">
					<div class="columns medium-6">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<p><?php the_field('textointro'); ?></p>
					</div>
					<div class="columns medium-6">
						<div class="formulario-servicios">
								<?php echo do_shortcode( '[contact-form-7 id="118" title="Cotización Servicios"]' ); ?>

								<script type="text/javascript">
									jQuery(document).ready(function(){
										jQuery('.wpcf7-form-control-wrap.servicio input').val('<?php the_title();?>');
									})
								</script>
						</div>
					</div>
					</div>
				</div>

			</div>

		</div>

	</header><!-- .entry-header -->


	<div class="row">
		<div class="column contenido-page-general">
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ureformada' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'efectovirtual' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
