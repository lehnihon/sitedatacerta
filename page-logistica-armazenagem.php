<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<section id="title-solucoes">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Armazenagem</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>Logística de Armazenagem</h2><br>
				<p>
					A Data Certa Logística oferece soluções completas de Armazenagem, que engloba desde o
					recebimento da mercadoria, armazenagem, movimentação, separação e demais serviços 
					complementares, para que os produtos estejam prontos para expedição, além de garantir a 
					qualidade e segurança.
				</p>
				<p>
					Custódia de cargas em ambiente seguro, monitorado, coberto, dotado de CFTV, controle de 
					acesso e sob gerenciamento de WMS com levantamento cíclico de inventário.
				</p>
				<p>
					A Data Certa dispõe de uma área coberta para armazenagem e pátio para estacionamento e manobra.
					O local é amplo, seguro e de fácil acesso para qualquer tamanho de carro ou caminhão.
				</p>
				<p>
					Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida.
					Entre em contato conosco, estamos prontos para atender sua empresa!
				</p>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-3.jpg"; ?>" />
			</div>
		</div><br><br><br><br>
		<?php get_template_part( 'template-parts/servicos-solucoes' ); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/contato-solucoes' ); ?>

<?php get_footer(); ?>
