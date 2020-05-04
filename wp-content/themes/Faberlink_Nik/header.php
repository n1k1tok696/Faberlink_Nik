<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Document</title>

  <?php wp_head();?>
</head>

<body>
  <header>
    <div class="main-page">
      <div class="left-article">
        <a href="<?php bloginfo('url');?>">
          <img src="images/logo_icon.png" alt="Logo">
          <h2><?php bloginfo('name');?></h2>
        </a>
        <div class="site-title">
          <h1>Finden Sie Ihren Architekten</h1>
          <p>Von unserer Architektur-Community erhalten Sie im Wettbewerbsverfahren
            Architektur-Konzeptentwürfe die Sie begeistern werden — Sie küren den Gewinner, bezahlen einen Preis und das
            mit Preisgeld-zurück-Garantie.</p>
        </div>
        <button><span>JETZT STARTEN</span></button>
      </div>
      <div class="right-article">
        <img src="<?php bloginfo('template_directory');?>/assets/images/fone.jpg" alt="fone">
        <nav id="nav" class="nav">
          <?php wp_nav_menu(array(
            'theme_lokation' => 'top',
            'container' => null,
            'menu_class' => 'nav',
            'menu_id' => 'nav',
          )
          );?>
          <ul>
            <li>So funktioniert's</li>
            <li>Preise</li>
            <li>Architekten</li>
            <li>Blog</li>
            <li>Out</li>
          </ul>
        </nav>
      </div>
    </div>
  </header>