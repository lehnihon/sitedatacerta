<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left">
					<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-bot.png"; ?>" />
				</div>
			</div><!-- .row -->
			<div class="row"><br>
				<div class="col-md-6 text-left">
					<p>A Data Certa surgiu com o objetivo de oferecer soluções que tornem mais simples a vida da sua empresa, seja de pequeno ou grande porte.</p>
					<p>Com nossas soluções em manuseio, transporte, courier, logística reversa, impressão com dados variáveis e gestão postal, seus prazos são levados a sério.</p>
					<p>Com tecnologia, excelência no atendimento e o melhor custo-benefício, a Data Certa cuida do gerenciamento completo de toda a cadeia produtiva do seu produto do início ao destino final.</p>
				</div>
				<div class="col-md-3 col-md-offset-3 text-left">
					<strong>Receba nossas novidades</strong>
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="#"></a></li>
					</ul>					
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-7">
					<ul class="menu-footer clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">QUEM SOMOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."mobidata" ); ?>">MOBIDATA</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."servicos"; ?>">SERVIÇOS</a></li>
						<li><a target="_blank" href="<?php echo esc_url( home_url( '/' ) )."blog"; ?>">BLOG</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">CONTATO</a></li>
					</ul>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6 text-left copy-text">
					&copy; Copyright <?php echo date('Y') ?> - Data Certa
				</div>
				<div class="col-md-3 col-md-offset-3 copy-text text-left">
					<a target="_blank" href="http://agenciarino.com.br/">
						<span>Desenvolvido por</span>
						<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/rino-bot.png"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</section><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
