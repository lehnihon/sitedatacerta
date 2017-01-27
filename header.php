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

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76592607-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 box clearfix">
						<span class="cor-amarelo">Fale com a gente </span>	
						<span class="texto-branco">11 <strong>2061-3138</strong></span>
					</div>
					<div class="col-md-3 box clearfix">
						<span class="cor-amarelo">Redes sociais </span>	
						<ul class="redes_sociais_header">
			              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
			              <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
			              <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
						</ul>
					</div>
					<div class="col-md-4 col-md-offset-2 box clearfix header-login">
						<a href="http://179.228.162.3:8000" class="btn-login pull-right">LOGIN</a>
						<span class="cor-amarelo pull-right">Acesse com seu login </span>
					</div>
					<div class="col-md-4 col-md-offset-2 box clearfix header-login-responsive">
						<span class="cor-amarelo">Acesse com seu login </span>
						<a href="http://179.228.162.3:8000" class="btn-login pull-left">LOGIN</a>
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
					<div class="col-md-7 col-md-offset-2">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' )."sobre"; ?>">QUEM SOMOS</a></li
							><li><a href="<?php echo home_url( '/' )."mobidata"; ?>">MOBIDATA</a></li
							><li><a href="<?php echo home_url( '/' )."servicos"; ?>">SERVIÇOS</a></li
							><li><a target="_blank" href="<?php echo home_url( '/' )."blog-logistica"; ?>">BLOG</a></li
							><li><a href="<?php echo home_url( '/' )."seja-nosso-fornecedor"; ?>">SEJA NOSSO FORNECEDOR</a></li
							><li><a href="<?php echo home_url( '/' )."trabalhe-conosco"; ?>">TRABALHE CONOSCO</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">CONTATO</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									FALE CONOSCO
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="<?php echo home_url( '/' )."contato"; ?>">CONTATO</a></li>
									<li><a href="<?php echo home_url( '/' )."seja-nosso-fornecedor"; ?>">SEJA NOSSO FORNECEDOR</a></li>
									<li><a href="<?php echo home_url( '/' )."trabalhe-conosco"; ?>">TRABALHE CONOSCO</a></li>
								</ul>
							
							</div>
							<div class="menu-op"><a target="_blank"  href="<?php echo home_url( '/' )."blog-logistica"; ?>">BLOG</a></div>							
							<div class="menu-op"><a href="<?php echo home_url( '/' )."servicos"; ?>">SERVIÇOS</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."mobidata"; ?>">MOBIDATA</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">QUEM SOMOS</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>
