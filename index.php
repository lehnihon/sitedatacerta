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

<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<?php
			echo do_shortcode("[metaslider id=540]"); 
			?>
		</div>
	</div>
</section>

<section id="tracking-buscar">
	<div class="container">
		<div class="row">
			<div class="col-md-4 news-left fadeInLeft wow">
				<div class="tracking-rastreie cor-amarelo">RASTREIE SEU PEDIDO AQUI</div>
			</div>
			<div class="col-md-8 news-right fadeInRight wow" data-wow-delay="0.5s">
				<form action="<?php echo home_url( '/' ).'rastreamento'; ?>" method="POST" class="tracking-form clearfix">
					<select name="pesquisawebserv">
						<option value="remessa">Número de remessa</option>
						<option value="cpf">CPF</option>
						<option value="ra">RA</option>
					</select>
					<input type="text" name="valor" placeholder="Número">
					<input class="submit" value="›" type="submit">
				</form>
			</div>				
		</div>	
	</div>
</section>

<section id="home-sobre">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">Sobre a Data Certa Logística</h1>
			<div class="separador"></div>
		</div>
		<div class="row fadeInUp wow">
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
		<div class="row fadeInUp wow">
			<h2>Informações interessantes sobre nós</h2>
		</div><br>		
		<div class="row fadeInUp wow contador">
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-empilhadeira.png"; ?>" />
				<h2 class="sobre-num counter">500.000</h2>
				<div class="sobre-desc">Volumes entregues de encomendas por ano.</div>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-caminhao.png"; ?>" />
				<h2 class="sobre-num"><span class="counter">4.000</span>km</h2>
				<div class="sobre-desc">Percorridos para realização das entregas por dia.</div>

			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-graficos.png"; ?>" />
				<h2 class="sobre-num"><span class="counter">99</span>,<span class="counter">7</span>%</h2>
				<div class="sobre-desc"><strong>SLA</strong> Prazo de entrega.</div>
			</div>
		</div><br><br><br>
		<div class="row fadeInUp wow">
			<a class="btn-sobre" href="<?php echo home_url( '/' )."sobre"; ?>">
				SAIBA MAIS
			</a>					
		</div>
	</div>
</section>

<section id="home-solucoes">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">Soluções de logística perfeitas para sua empresa</h1>
			<div class="separador"></div>
			<p><strong>Conheça os serviços completos de logística que a Data Certa oferece para sua empresa.</strong></p>
		</div><br/>
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

<section id="home-mobidata">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">Aplicativo Mobidata</h1>
			<div class="separador"></div>
		</div>
		<div class="row fadeInUp wow">
			<div class="col-md-8 col-md-offset-2">
				<p>
					<strong>Mobidata é um aplicativo de monitoramento de encomendas em tempo real. <br>
						Com rastreamento geolocalizador, é possível saber onde está a encomenda.</strong>					
				</p><br/><br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 text-left">
				<h2 class="fadeInUp wow">Mobidata</h2>
				<p class="fadeInUp wow">
					O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de entregas em locais errados. <br>
					As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.	
				</p>					
				<div class="separadorb fadeInUp wow"></div>
				<ul class="mobi-vantagens fadeInUp wow">
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Baixa em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Digitalização em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Prova incontestável da visita através de foto do domicílio</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Rastreamento do entregador</div></li>
				</ul>
				<h2 class="fadeInUp wow">Baixe o aplicativo Mobidata</h2><br>
				<a class="fadeInUp wow" href="https://play.google.com/store/apps/details?id=br.com.fastcourier" target="_blank"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-playstore.png"; ?>" /></a><br>
				<a class="fadeInUp wow" href="#" data-toggle="modal" data-target="#myModala"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-saiba-mais.png"; ?>" /></a>
			</div>
			<div class="col-md-5 fadeInRight wow" data-wow-delay="1s">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mobi-cel.png"; ?>" />
			</div>
		</div>
	</div>		
</section>
<div class="modal fade" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-left">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/m8ibxHaGcPw?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
