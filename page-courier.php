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
			<h1 class="titulo-linha">Courier</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>Entrega Expressa ou Emergencial</h2><br>
				<p>
					Courier é o serviço de Entrega Expressa da Data Certa Logística, indicado para encomendas e entregas urgentes, que necessitam de máxima precisão e agilidade.
				</p>
				<p>
					<strong>Entrega domiciliar expressa ou emergencial nos estados de São Paulo e Rio de Janeiro.</strong>
				</p>
				<p>
					Acompanhanhamos pessoalmente a carga do local de coleta até a porta do destinatário, tendo o embarque imediato. O serviço de Courier é ideal para lojas virtuais e empresas de todos os portes.

				</p>
				<p>
					<strong>Aplicativo Mobidata</strong><br/> 
					Você pode monitorar em tempo real suas entregas através aplicativo Mobidata, nosso próprio aplicativo de rastreamento e monitoramento de envios.<br/>
					É o serviço mais rápido de entregas expressas do mercado!<br/>
						Entre em contato conosco, estamos prontos para atender sua empresa!<br/>
				</p>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-2.jpg"; ?>" />
			</div>
		</div><br><br><br><br>
		<div class="row">
			<div class="col-md-2">
				<a href="<?php echo home_url( '/' )."cargo"; ?>">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-1.jpg"; ?>" />
				</a>
				<strong>Cargo</strong>
			</div>
			<div class="col-md-2">
				<a href="<?php echo home_url( '/' )."courier"; ?>">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-2.jpg"; ?>" />
				</a>
				<strong>Courier</strong>
			</div>
			<div class="col-md-2">
				<a href="<?php echo home_url( '/' )."armazenagem"; ?>">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-3.jpg"; ?>" />
				</a>
				<strong>Armazenagem</strong>
			</div>
			<div class="col-md-2">
				<a href="<?php echo home_url( '/' )."fulfillment"; ?>">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-4.jpg"; ?>" />
				</a>
				<strong>Fulfillment</strong>
			</div>
			<div class="col-md-2">
				<a href="<?php echo home_url( '/' )."reversa"; ?>">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-5.jpg"; ?>" />
				</a>
				<strong>Reversa</strong>
			</div>
			<div class="col-md-2">
				<a href="#">
				<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-6.jpg"; ?>" />
				</a>
				<strong>Impressão de dados variáveis</strong>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/contato-solucoes' ); ?>

<?php get_footer(); ?>
