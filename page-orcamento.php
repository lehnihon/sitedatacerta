<?php
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
<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Quero um orçamento agora</h1>
				<h5><strong>Preencha todos os campos, em breve um especialista entrará em contato</strong></h5>
				<?php echo do_shortcode('[contact-form-7 id="557" title="Contato"]'); ?>
			</div>
			<div class="col-md-6">
				<h2>Quer saber mais sobre a Data Certa Logística?</h2>
				<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
					<a class="botao-conheca" href="<?php echo home_url( '/' )."sobre"; ?>">
					Conheça a Data Certa</a>
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
