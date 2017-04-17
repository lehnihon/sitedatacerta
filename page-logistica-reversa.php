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

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="solucoes-menu">
					<li><a href="">Transporte de Cargas</a></li>
					<li><a href="">Entrega Expressa</a></li>
					<li><a href="">Armazenagem</a></li>
					<li><a href="">Logística Reversa</a></li>
					<li><a href="">Manuseio de Kits</a></li>
					<li><a href="">Impressão de Dados</a></li>
					<li><a href="">Digitalização de Documentos</a></li>
					<li><a href="">Pequenas e Médias Empresas</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Logistica reversa data certa logistica.jpg"; ?>" alt="logistica-reversa"><br><br>
				<h1>Digitalização de documentos</h1><br>
				<p>Todos os dias uma grande quantidade de documentos são produzidos pela sua empresa. Esses documentos são impressos, 
				enviados, armazenados e constantemente procurados, e isso ocupa uma grande parte do tempo e recursos da sua empresa.</p>
				

				Por esse motivo, vale a pena investir no processo de digitalização de documentos.
				A Data Certa desenvolve soluções simples, práticas e seguras para digitalizar e armazenar todos os seus documentos.

				Primeiro, escaneamos todos os seus documentos, e aqueles milhares de papéis se tornam arquivos digitais. Em seguida, 
				todos esses dados são organizados, criptografados e armazenados no nosso servidor na nuvem.

				Com o nosso sistema de gestão de documentos, com apenas um clique, você consegue acessar seus dados de qualquer 
				computador, tablet e celular que estejam conectados a internet.

				Benefícios da digitalização de documentos:
				- Você acessa seus documentos digitais de qualquer dispositivo
				- Sem papel, econômico e sustentável
				- Envia, assina, armazena de maneira simples e rápido
				- Dados criptografados em nosso servidor na nuvem
				- Economia de tempo e recursos
				- Válidade Jurídica
				- Autenticidade

				Na Data Certa, você também tem uma grande vantagem, todos os seus documentos digitalizados tem validade jurídica, 
				estando em conformidade com a legislação brasileira, ou seja, todos os documentos digitalizados passam por um processo 
				de certificação digital.

				Cada documento digitalizado ganha um selo que identifica a autenticidade desse documento.

				Esse selo contém informações como o endereço IP, e-mail, data de digitalização e a assinatura eletrônica do signatário.
				Todo esse processo é integrado com a Receita Federal, garantindo assim, a validade jurídica desses documentos digitalizados.

				Com a Data Certa, você economiza tempo, reduz gastos com impressão e armazenamento. E ainda ajuda a preservar o meio
				ambiente. Com a redução do uso de papel, você evita que mais árvores sejam cortadas.
		</div>
	</div>
</section>

<div id="quer-saber-mais">
	<h2>Quer saber mais sobre a Data Certa Logística?</h2>
	<h5><strong>Converse com um especialista em logística e veja como podemos te ajudar!</strong></h5><br>
	<div class="tel-botao">
		<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel.jpg"; ?>" alt="telefone"><span>11 2061-3138</span>
		<a class="botao-conheca-amarelo" href="<?php echo home_url( '/' )."orcamento"; ?>">
		Quero um Orçamento</a>
	</div>
</div>

<?php get_footer(); ?>
