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
          <div class="col-md-3 box clearfix">
            <span class="cor-amarelo">Fale com a gente </span>  
            <span class="texto-branco">11 <strong>2061-3138</strong></span>
          </div>
          <div class="col-md-3 col-md-offset-6 box clearfix">
            <span class="cor-amarelo">Redes sociais </span> 
            <ul class="redes_sociais_header">
              <li class="youtube"><a target="_blank" href="#"></a></li>
              <li class="instagram"><a target="_blank" href="#"></a></li>
              <li class="twitter"><a target="_blank" href="#"></a></li>
              <li class="facebook"><a target="_blank" href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-left">
            <a href="<?php echo home_url( '/' )."blog"; ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" /></a>
          </div>
          <div class="col-md-7 col-md-offset-2">
            <div class="menu-responsivo">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo home_url( '/' )."sobre"; ?>">NOTÍCIAS</a></li
                ><li><a href="<?php echo home_url( '/' )."mobidata"; ?>">LOGÍSTICA</a></li
                ><li><a href="<?php echo home_url( '/' )."servicos"; ?>">CONTATO</a></li>
              </ul>
              <div class="wrap-search"><?php get_search_form(); ?></div>               
            </div>            
            <div class="menu-header clearfix">
              <div class="menu-op wrap-search"><?php get_search_form(); ?></div>             
              <div class="menu-op"><a href="<?php echo home_url( '/' )."servicos"; ?>">CONTATO</a></div>
              <div class="menu-op"><a href="<?php echo home_url( '/' )."mobidata"; ?>">LOGÍSTICA</a></div>
              <div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">NOTÍCIAS</a></div>
            </div>
          </div>          
        </div>
      </div>
    </nav>
  </section>