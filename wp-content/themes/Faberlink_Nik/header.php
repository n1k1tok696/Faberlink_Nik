<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head();?>
</head>

<body>
  <header class="header">
    <a href="<?php bloginfo('url');?>" class="main-logo">
      <img src="images/logo_icon.png" alt="Logo">
      <h2><?php bloginfo('name');?></h2>
    </a>
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
      </ul>
    </nav>
    <div class="sign-in">
      <span>Einloggen</span>
      <img src="images/signIn.png" alt="signIn">
    </div>
  </header>