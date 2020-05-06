<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Document</title> -->
  <!-- вместо title отрабатывает ф-я add_theme_support( 'title-tag' ); в functions.php -->
  <?php wp_head();?>
</head>

<body>
  <header class="header">
    <a href="<?php echo home_url();?>" class="main-logo">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_icon.png" alt="Logo">
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
      <!-- <ul>
        <li><a href="">So funktioniert's</a></li>
        <li><a href="">Preise</a></li>
        <li><a href="">Architekten</a></li>
        <li><a href="">Blog</a></li>
      </ul> -->
    </nav>
    <div class="sign-in">
      <span>Einloggen</span>
      <img src="<?php echo get_template_directory_uri();?>/assets/images/signIn.png" alt="signIn">
    </div>
  </header>