<?php

/*
Template Name: Contact Us
*/

?>

<?php get_header();?>

<div class='wrapper'>
  <h1><?php the_title();?></h1>

  <div class="row">
    <div class="col-lg-6">
      This is where the contact form goes
    </div>
      <?php get_template_part('includes/section', 'content')?>
    <div class="col-lg-6">
      
    </div>
  </div>
</div>


<?php get_footer();?>