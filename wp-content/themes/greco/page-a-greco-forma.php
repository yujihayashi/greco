<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="container">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
				get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
				endwhile;
				?>
				<div class="row">
					<div class="col-md-3">
						<div class="box">
							<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/missao.jpg" alt="Missão"></div> <!-- .imagem -->
							<div class="conteudo">
								<h2 class="media-heading">Missão</h2>
								<p>
									Estimular e promover um mundo
									no qual todas as pessoas possam
									ter qualidade de vida, bem-estar e
									convívio social. A Greco existe para
									que famílias e amigos tenham um
									ambiente saudável na construção
									de uma vida saudável.
								</p>
							</div> <!-- .conteudo -->
						</div> <!-- .box -->
					</div> <!-- .col-md-3 -->
					<div class="col-md-3 col-md-offset-1">
						<div class="box">
							<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/objetivo.jpg" alt="Objetivo"></div> <!-- .imagem -->
							<div class="conteudo">
								<h2 class="media-heading">Objetivo</h2>
								<p>
									Ser reconhecida como uma empresa
									em que o profissionalismo e a
									infraestrutura estejam sempre
									à frente, fomentando nos alunos
									a procura diária por uma vida
									saudável por meio de exercícios
									físicos e boa convivência social.
								</p>
							</div> <!-- .conteudo -->
						</div> <!-- .box -->
					</div> <!-- .col-md-3 -->
					<div class="col-md-3 col-md-offset-1">
						<div class="box">
							<div class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/visao.jpg" alt="Visão"></div> <!-- .imagem -->
							<div class="conteudo">
								<h2 class="media-heading">Visão</h2>
								<p>
									Manutenção da vida saudável por
									meio de expansão de unidades
									com a mesma qualidade oferecida.
									Constante melhoria interna para
									atender os alunos da melhor forma
									possível e, na mesma proporção,
									cuidar do bem-estar de cada um
									que frequenta cada uma das
									unidades.
								</p>
							</div> <!-- .conteudo -->
						</div> <!-- .box -->
					</div> <!-- .col-md-3 -->
				</div> <!-- .row -->
			</div> <!-- .container -->

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();
