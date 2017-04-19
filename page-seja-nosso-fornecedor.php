<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Seja nosso fornecedor</h1>
				<h5><strong>Na expectativa de sempre oferecer os melhores produtos, ficamos felizes em atender novos fornecedores. </strong></h5><br>
				<?php echo do_shortcode('[contact-form-7 id="557" title="Contato"]'); ?>
			</div>
			<div class="col-md-6">
				<h2>Quer saber mais sobre a Data Certa Logística?</h2>
				<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
					<a class="botao-conheca" href="<?php echo home_url( '/' )."orcamento"; ?>">
					Quero um Orçamento</a>
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>


