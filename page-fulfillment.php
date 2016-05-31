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
			<h1 class="titulo-linha">Fulfillment</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>Fulfillment - Alta performance em montagem e embalagem</h2><br>
				<p>
					A Data Certa Logística oferece soluções completas de Fulfillment.
				</p>
				<p>
					<strong>Alta performance em montagem e embalagem de kits promocionais, de mídia, de boas vindas
					e brindes com dados variáveis. <br/>
					Operações dedicadas de manuseio em ambientes segregados e monitorados.
					</strong>
				</p>
				<p>
					Os materiais promocionais, didáticos, insumos gráficos (brindes, folhetos, catálogos, banners etc) tem como característica própria uma alta rotatividade e diversidade de estoque.
				</p>
				<p>
					Através de um sistema com acesso pela internet, o cliente pode, de qualquer lugar,solicitar retiradas do 
					estoque (picking) acompanhar em tempo real a posição do seu estoque, solicitar manuseios envolvendo 
					diversos ítens, embalagens específicas, emitir relatórios etc.
				</p>
				<p>
				Os pedidos de distribuição são prontamente atendidos com a separação dos materiais nas quantidades 
				solicitadas, embalados adequadamente de acordo com o tipo de produto e expedidos para entregas 
				domiciliares ou movimentação entre armazens.
				</p>
				<p>
					<strong>Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida. <br/>
Entre em contato conosco, estamos prontos para atender sua empresa!
</strong>
				</p>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-4.jpg"; ?>" />
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
