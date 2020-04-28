<main>
  <div class="banner">
    <div class="wrapper">
      <img src="<?php bloginfo('template_directory');?>/images/banner.jpg" alt="Banner">
    </div>
  </div>
  
  <div class='container'>

  <?php get_template_part('includes/section', 'content')?>
  </div>

  <div class="circles">
    <?php get_template_part('includes/elements', 'content')?>
  </div>
  <div class="shoping wrapper">
    <h1 >The Shopping cart</h1>
      <?php get_template_part('includes/basket', 'content')?>
  </div>
</main>