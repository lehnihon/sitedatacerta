<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="small">Localização</h1>
				<h5><strong>Confira onde a Data Certa Logística está localizada</strong></h5><br>
				<!--<div class="videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.082055173371!2d-46.588201284448466!3d-23.601389968958074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c7b0a1f7dd7%3A0x8c466af8d5dd484c!2sAv.+Carioca%2C+688+-+Vila+Carioca%2C+S%C3%A3o+Paulo+-+SP%2C+04225-002!5e0!3m2!1spt-BR!2sbr!4v1510918022262" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>-->
			</div>
			<div class="col-md-6">
				<h2>Quer saber mais sobre a Data Certa Logística?</h2>
				<h5><strong>Converse com nosso diretor comercial e veja como podemos te ajudar!</strong></h5><br>
				<div class="tel-botao">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
				</div>
				<div class="email">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/email.jpg"; ?>" alt="telefone"><span>contato@datacerta.com</span><br>
					<!--Avenida Carioca, 688 - Vila Carioca, São Paulo - SP	-->
					
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
