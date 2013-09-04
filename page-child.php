<?php
/*
  Template Name: Child page (general)
*/
?>

<?php if (get_the_content()) : ?>

<section id="<?php echo $post->post_name; ?>" class="page-child content-module">

  <h1 class="child-page-title"><?php the_title(); ?></h1>
  
  <div class="page-content">
    
    <?php the_content(); ?>

  </div>

</section>

<?php endif; ?>