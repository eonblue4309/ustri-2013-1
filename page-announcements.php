<?php
/*
  Template Name: Announcements
*/
?>

<section id="<?php echo $post->post_name; ?>" class="announcements-page content-module">

  <h1 class="child-page-title"><?php the_title(); ?></h1>

  <div class="page-content">
  
  <?php
    $announcements_query = new WP_Query(array(
        'category_name' => 'announcements',
        'posts_per_page' => '1'
      )
    );

    while ( $announcements_query->have_posts() ) :

      $announcements_query->the_post(); 
  ?>
  
    <article>
    
      <h1 class="announcement-title"><?php the_title(); ?></h1>
    
      <time><?php the_date(); ?></time>
      
      <?php the_content(); ?>
    
    </article>

  <?php 
    endwhile; 
    wp_reset_postdata(); // reset the query 
  ?>

  </div>
  
</section>

