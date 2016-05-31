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
			<h1 class="titulo-linha">Cargo</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>Transporte de Cargas Completas ou Cargas Fracionadas</h2><br>
				<p>
					A Data Certa Logística atua com os serviços de Transporte de Cargas Completas ou Transporte de Cargas Fracionadas, embaladas ou não.
				</p>
				<p>
					<strong>Atendimento dedicado ponto a ponto nas regiões Sul, Sudeste e Centro Oeste e distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</strong>
				</p>
				<p>
					Nosso foco é o atendimento à empresas de todos os tamanhos.<br/>  Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida.
				</p>
				<p>
					<strong>Estrutura da Data Certa Logística para sua empresa</strong><br/> 
					A Data Certa possui uma frota própria de caminhões e veículos utilitários, além de contar com um centro de armazenamento.<br/>
					Tudo isso para a sua carga chegar ao destino certo e na data certa.<br/>
						Entre em contato conosco, estamos prontos para atender sua empresa!<br/>
				</p>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-1.jpg"; ?>" />
			</div>
		</div><br><br><br><br>
		<div class="row">
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-1.jpg"; ?>" />
				<strong>Cargo</strong>
			</div>
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-2.jpg"; ?>" />
				<strong>Courier</strong>
			</div>
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-3.jpg"; ?>" />
				<strong>Armazenagem</strong>
			</div>
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-4.jpg"; ?>" />
				<strong>Fulfillment</strong>
			</div>
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-5.jpg"; ?>" />
				<strong>Reversa</strong>
			</div>
			<div class="col-md-2">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-6.jpg"; ?>" />
				<strong>Impressão de dados variáveis</strong>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/contato-solucoes' ); ?>

<?php get_footer(); ?>
