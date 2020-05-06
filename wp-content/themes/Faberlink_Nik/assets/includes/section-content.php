<?php if (have_posts()) { while (have_posts()) { the_post();?>
<div class="post">
  <a href="<?php the_permalink();?>">
    <h2><?php the_title();?></h2>
  </a>
  <p>Preview: <?php the_post_thumbnail('thumbnail');?></p>
  <p>Creation time: <?php the_time('F, jS, Y');?></p>
  <p>Add category: <?php the_category( $separator = '/');?></p>
  <p>Some tags: <?php the_tags( '', '/');?></p>

  <?php the_content();?>
</div>
  <?php } 
} ?>
