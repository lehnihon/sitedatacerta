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
<div id="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('','');
				}
				?>
			</div>
		</div>
	</div>
</div>
<section id="solucoes">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">Soluções de logística perfeitas para sua empresa</h1>
			<div class="separador"></div>
			<p><strong>Conheça os serviços completos de logística que a Data Certa oferece para sua empresa.</strong></p>
		</div><br/><br/>
		<div class="row fadeIn wow">
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes1.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes2.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes3.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes4.jpg"; ?>" /></a>
			</div>
		</div>
		<div class="row fadeIn wow">
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes5.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes6.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes7.jpg"; ?>" /></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo home_url( '/' )."servicos"; ?>"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes8.jpg"; ?>" /></a>
			</div>
		</div>
	</div>
</section>

<div id="quer-saber-mais">
	<h2>Quer saber mais sobre a Data Certa Logística?</h2>
	<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
	<div class="tel-botao">
		<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
		<a class="botao-conheca" href="<?php echo home_url( '/' )."orcamento"; ?>">
		Quero um Orçamento</a>
	</div>
</div>

<?php get_footer(); ?>
