<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Data Certa Logistica Icone.png"; ?>" />
<?php wp_head(); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76592607-1', 'auto');
ga('send', 'pageview');
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-2 box clearfix">
			            <span class="cor-amarelo">Operação: </span>
			            <span class="texto-branco"></span>
			          </div>
			          <div class="col-md-4 box clearfix">
			            <span class="cor-amarelo">Comercial: </span>
			            <span class="texto-branco">11 <strong>96321-7360</strong></span>
			          </div>
					<div class="col-md-3 box clearfix">
						<span class="cor-amarelo">Redes sociais </span>	
						<ul class="redes_sociais_header clearfix">
			              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
			              <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
			              <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
			              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company-beta/10804304"></a></li>
						</ul>
					</div>
					<div class="col-md-3 box clearfix header-login">
						<a href="http://34.200.50.59" class="btn-login pull-right">LOGIN</a>
						<span class="cor-amarelo pull-right">Acesse com seu login </span>
					</div>
					<div class="col-md-3 box clearfix header-login-responsive">
						<span class="cor-amarelo">Acesse com seu login </span>
						<a href="http://34.200.50.59" class="btn-login pull-left">LOGIN</a>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' )."orcamento"; ?>">Calcular Frete</a></li
							><li><a href="<?php echo home_url( '/' )."mobidata"; ?>">Aplicativo Mobidata</a></li
							><li><a href="<?php echo home_url( '/' )."servicos"; ?>">Serviços</a></li
							><li><a target="_blank" href="<?php echo home_url( '/' )."blog-logistica"; ?>">Blog</a></li
							><li><a href="<?php echo home_url( '/' )."seja-nosso-fornecedor"; ?>">Seja nosso Fornecedor</a></li
							><li><a href="<?php echo home_url( '/' )."trabalhe-conosco"; ?>">Trabalhe Conosco</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">Cobrança</a></li
							><li><a href="<?php echo home_url( '/' )."rastrear"; ?>">Rastreie Seu Pedido</a></li
							><li><a href="<?php echo home_url( '/' )."localizacao"; ?>">Localização</a></li
							><li><a href="<?php echo home_url( '/' )."quero-ser-cliente"; ?>">Faça um Orçamento</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a class="orcamento" href="<?php echo home_url( '/' )."quero-ser-cliente"; ?>">Faça um Orçamento</a></div>
							<div class="menu-op">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Fale Conosco
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="<?php echo home_url( '/' )."contato"; ?>">Cobrança</a></li>
									<li><a href="<?php echo home_url( '/' )."seja-nosso-fornecedor"; ?>">Seja Nosso Fornecedor</a></li>
									<li><a href="<?php echo home_url( '/' )."trabalhe-conosco"; ?>">Trabalhe Conosco</a></li>
									<li><a href="<?php echo home_url( '/' )."rastrear"; ?>">Rastreie Seu Pedido</a></li>
									<li><a href="<?php echo home_url( '/' )."localizacao"; ?>">Localização</a></li>
								</ul>

							</div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/' )."blog-logistica"; ?>">Blog</a></div>							
							<div class="menu-op"><a href="<?php echo home_url( '/' )."servicos"; ?>">Serviços</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."mobidata"; ?>">Aplicativo Mobidata</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."orcamento"; ?>">Calcular Frete</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>
