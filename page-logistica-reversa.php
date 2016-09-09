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
			<h1 class="titulo-linha">Logística Reversa</h1>
			<div class="separador"></div>
		</div>
	</div>		
</section>

<section id="solucoes-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-left">
				<h2>A Data Certa Logística é especialista em Logística Reversa.</h2><br>
				<p>
					Logística reversa: o termo refere-se ao papel da logística no retorno de produtos, redução na fonte, reciclagem, substituição de materiais, reuso de materiais, disposição de resíduos, reforma, reparação e remanufatura.
				</p>
				<p>
					<strong>Prints color em papel ou pvc de peças com aplicação de dados do cliente como nome, endereço, 
					códigos etc.</strong>
				</p>
				<p>
					As atividades de logística reversa variam desde a simples revenda de um produto até processos que 
abrangem inúmeras etapas como: coleta, inspeção, separação, levando a uma remanufatura ou reciclagem. 

				</p>
				<p>
				A logística reversa envolve todas as operações relacionadas à reutilização de produtos e materiais, na busca 
de uma recuperação sustentável. Como procedimento logístico, trata-se também do fluxo de materiais que 
retornam por algum motivo - devoluções de clientes, retorno de embalagens, retorno de produtos e/ou 
materiais para atender à legislação etc. 
				</p>
				<p>
				A logística reversa não trata apenas do fluxo físico de produtos, mas também de todas as informações 
envolvidas nesse processo
				</p>
				<p>
					<strong>Seja qual for a necessidade de sua empresa, nós podemos ajudar com soluções sob medida.<br/>
Entre em contato conosco, estamos prontos para atender sua empresa!
</strong>
				</p>
			</div>
			<div class="col-md-4">
				<img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesg-5.jpg"; ?>" />
			</div>
		</div><br><br><br><br>
		<?php get_template_part( 'template-parts/servicos-solucoes' ); ?>
	</div>
</section>

<?php get_template_part( 'template-parts/contato-solucoes' ); ?>

<?php get_footer(); ?>
