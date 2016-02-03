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
			<h1 class="titulo-linha">Serviços</h1>
			<div class="separador"></div>
			<p>Soluções de logística perfeitas que a Data Certa oferece para sua empresa.</p>
		</div>
	</div>		
</section>

<section id="solucoes">
	<div class="container">
		<div class="quadro-branco">
			<div class="row">
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-1.png"; ?>" />
					<div class="solucoes-desc">
						<header>Cargo</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-2.png"; ?>" />
					<div class="solucoes-desc">
						<header>Courier</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-3.png"; ?>" />
					<div class="solucoes-desc">
						<header>Armazenagem</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-4.png"; ?>" />
					<div class="solucoes-desc">
						<header>Fulfillment</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-5.png"; ?>" />
					<div class="solucoes-desc">
						<header>Reversa</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-6.png"; ?>" />
					<div class="solucoes-desc">
						<header>Impressão de dados variáveis</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
