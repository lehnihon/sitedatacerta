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
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 box">
						<span class="cor-amarelo">Fale com a gente </span>	
						<span class="texto-branco">11 <strong>2061-3138</strong></span>
					</div>
					<div class="col-md-3 box">
						<span class="cor-amarelo">Redes sociais </span>	
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
					<div class="col-md-4 col-md-offset-2 box">
						<span class="cor-amarelo">Não possui login? </span>	
						<span class="texto-branco">Cadastra-se <strong>Aqui</strong></span>
						<button class="btn-login pull-left">LOGIN</button>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="logo-top">
					<a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /></a>
				</div>
				<div class="header-menu">
					
				</div>
			</div>
		</nav>
	</section>
