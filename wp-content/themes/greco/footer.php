<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

</div><!-- #main -->

<div class="extra-footer">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="footer-header">Redes Sociais</span>
					<div class="footer-social">
						<a href="#" target="_blank" title="Acesse nosso Facebook"><span class="icon-facebook"></span><span class="sr-only">Facebook</span></a>
						<a href="#" target="_blank" title="Acesse nosso Instagram"><span class="icon-instagram"></span><span class="sr-only">Instagram</span></a>
						<a href="#" target="_blank" title="Acesse nosso Twitter"><span class="icon-twitter"></span><span class="sr-only">Twitter</span></a>
					</div> <!-- .footer-social -->
				</div> <!-- .col-md-4 -->
				<div class="col-md-5">
					<span class="footer-header">Parceiros</span>
					<div class="box-parceiros">
						<a href="http://www.grancarbelem.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/gran-car.png" alt="Logotipo Gran Car"></a>
						<a href="http://www.righetto.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/riguetto.png" alt="Logotipo Riguetto"></a>
						<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/parceiros/festa-belem.png" alt="Logotipo Festa Belém"></a>
					</div> <!-- .box-parceiros -->
				</div> <!-- .col-md-5 -->
				<div class="col-md-3 text-center">
					<span class="footer-header footer-header-sm">Desenvolvido por:</span>
					<a href="http://festabelem.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/1to1.png" alt="Logotipo 1to1"></a>
				</div> <!-- .col-md-3 -->
			</div> <!-- .row -->
			<?php get_sidebar( 'footer' ); ?>
		</div> <!-- .container -->

	</footer><!-- #colophon -->
</div> <!-- .extra-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>