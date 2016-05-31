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
					<a href="<?php echo home_url( '/' )."cargo"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-1.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Cargo</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."cargo"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="<?php echo home_url( '/' )."courier"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-2.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Courier</header>
						<p>Entrega domiciliar expressa ouemergencial nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."courier"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="<?php echo home_url( '/' )."armazenagem"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-3.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Armazenagem</header>
						<p>Custódia de cargas em ambiente seguro, monitorado, coberto, dotado de CFTV, controde de acesso.</p>
						<a href="<?php echo home_url( '/' )."armazenagem"; ?>">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo home_url( '/' )."fulfillment"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-4.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Fulfillment</header>
						<p>Alta perfomance em montagem e embalagem, operações dedicadas com manuseio em ambientes monitorados.</p>
						<a href="<?php echo home_url( '/' )."fulfillment"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="<?php echo home_url( '/' )."reversa"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-5.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Reversa</header>
						<p>Prints color e p&b em papel ou pvc de peças com aplicação de dados do cliente como nome, endereço etc.</p>
						<a href="<?php echo home_url( '/' )."reversa"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4">
					<a href="<?php echo home_url( '/' )."impressao-de-dados-variaveis"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-6.jpg"; ?>" /></a>
					<div class="solucoes-desc">
						<header>Impressão de dados variáveis</header>
						<p>Prints color em papel ou pvc de peças com aplicação de dados do cliente como nome, endereço, código etc.</p>
						<a href="<?php echo home_url( '/' )."impressao-de-dados-variaveis"; ?>">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
