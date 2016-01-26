<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container-fluid">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>
	<section id="home-sobre">
		<div class="container">
			<div class="row">
				<h1 class="titulo-linha">Sobre a Data Certa Logística</h1>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>
						<strong>A Data Certa surgiu com o objetivo de oferecer soluções de logística que tornem mais simples a vida da sua empresa, seja de pequeno ou grande porte.</strong>
					</p><br>
					<p class="sobre-p">
						Com nossas soluções em manuseio, transporte, courier, logística reversa, impressão com dados variáveis e gestão postal, seus prazos são levados a sério.
					</p>
					<p class="sobre-p">
						Com tecnologia, excelência no atendimento e o melhor custo-benefício, a Data Certa cuida do gerenciamento completo de toda a cadeia produtiva do seu produto no início ao destino final.
					</p>					
				</div>
			</div><br><br><br>
			<div class="row">
				<h2>Informações interessantes sobre nós</h2>
			</div><br>		
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-empilhadeira.png"; ?>" />
					<h2 class="sobre-num">500.000</h2>
					<div class="sobre-desc">Volumes entregues de encomendas por ano.</div>
				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-caminhao.png"; ?>" />
					<h2 class="sobre-num">4.000km</h2>
					<div class="sobre-desc">Percorridos para realização das entregas por dia.</div>

				</div>
				<div class="col-md-4">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-graficos.png"; ?>" />
					<h2 class="sobre-num">99,7%</h2>
					<div class="sobre-desc"><strong>SLA</strong> Prazo de entrega.</div>
				</div>
			</div><br><br><br>
			<div class="row">
				<a class="btn-sobre" href="#">
					SAIBA MAIS
				</a>					
			</div>
		</div>
	</section>
</div><!-- #content -->

<?php get_footer(); ?>
