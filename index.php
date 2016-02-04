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
			<?php putRevSlider( "banner-index" ) ?>		
		</div>
	</div>
</section>

<section id="tracking-buscar">
	<div class="container">
		<div class="row">
			<div class="col-md-4 news-left">
				<div class="tracking-rastreie cor-amarelo">RASTREIE SEU PEDIDO AQUI</div>
			</div>
			<div class="col-md-8 news-right">
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
		<div class="row">
			<h1 class="titulo-linha">Sobre a Data Certa Logística</h1>
			<div class="separador"></div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 anima-a">
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
			<div class="col-md-4 anima-b">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-empilhadeira.png"; ?>" />
				<h2 class="sobre-num counter">500.000</h2>
				<div class="sobre-desc">Volumes entregues de encomendas por ano.</div>
			</div>
			<div class="col-md-4 anima-c">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-caminhao.png"; ?>" />
				<h2 class="sobre-num"><span class="counter">4.000</span>km</h2>
				<div class="sobre-desc">Percorridos para realização das entregas por dia.</div>

			</div>
			<div class="col-md-4 anima-d">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-graficos.png"; ?>" />
				<h2 class="sobre-num"><span class="counter">99</span>,<span class="counter">7</span>%</h2>
				<div class="sobre-desc"><strong>SLA</strong> Prazo de entrega.</div>
			</div>
		</div><br><br><br>
		<div class="row">
			<a class="btn-sobre" href="<?php echo home_url( '/' )."sobre"; ?>">
				SAIBA MAIS
			</a>					
		</div>
	</div>
</section>

<section id="home-solucoes">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Soluções de logística perfeitas para sua empresa</h1>
			<div class="separador"></div>
			<p>Conheça os serviços completos de logística que a Data Certa oferece para sua empresa.</p>
		</div><br/>
		<div class="quadro-branco">
			<div class="row">
				<div class="col-md-4 anima-e">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-1.png"; ?>" />
					<div class="solucoes-desc">
						<header>Cargo</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4 anima-e">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-2.png"; ?>" />
					<div class="solucoes-desc">
						<header>Courier</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4 anima-e">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-3.png"; ?>" />
					<div class="solucoes-desc">
						<header>Armazenagem</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 anima-f">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-4.png"; ?>" />
					<div class="solucoes-desc">
						<header>Fulfillment</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4 anima-f">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-5.png"; ?>" />
					<div class="solucoes-desc">
						<header>Reversa</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
				<div class="col-md-4 anima-f">
					<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoes-6.png"; ?>" />
					<div class="solucoes-desc">
						<header>Impressão de dados variáveis</header>
						<p>Atendimento dedicado ponto a ponto com distribuição em mais de 300 localidades nos estados de São Paulo e Rio de Janeiro.</p>
						<a href="<?php echo home_url( '/' )."servicos"; ?>">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home-mobidata">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Aplicativo Mobidata</h1>
			<div class="separador"></div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 anima-g">
				<p>
					<strong>Mobidata é um aplicativo de monitoramento de encomendas em tempo real. <br>
						Com rastreamento geolocalizador, é possível saber onde está a encomenda.</strong>					
				</p><br/><br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 text-left anima-h">
				<h2>Mobidata</h2>
				O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de entregas em locais errados. <br>
				As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.					
				<div class="separadorb"></div>
				<ul class="mobi-vantagens">
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Baixa em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Digitalização em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Prova incontestável da visita através de foto do domicílio</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.png"; ?>" /><div class="check-desc">Rastreamento do entregador</div></li>
				</ul>
				<h2>Baixe o aplicativo Mobidata</h2><br>
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-playstore.png"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."mobidata"; ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-saiba-mais.png"; ?>" /></a>
			</div>
			<div class="col-md-5 anima-i">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mobi-cel.png"; ?>" />
			</div>
		</div>
	</div>		
</section>

<?php get_footer(); ?>
