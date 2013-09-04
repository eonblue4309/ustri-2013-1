<?php
/*
  Template Name: Events
*/
?>

<section id="<?php echo $post->post_name; ?>" class="events-page content-module">

  <h1 class="child-page-title"><?php the_title(); ?></h1>

  <?php

    $the_query = new WP_Query(array(
      'post_type' => 'events',
      'posts_per_page' => -1,
      'orderby'   => 'menu_order'
    ));

    while ($the_query->have_posts()) :
    $the_query->the_post();

  ?>

  <article class="post event page-content" id="post-<?php the_ID(); ?>">

    <h1 class="event-title"><?php the_title(); ?></h1>

    <dl>
      
      <dt>Date</dt>
      <dd><?php echo date("F d, Y", strtotime(get_field('date'))); ?></dd>

      <?php if (get_field('end_date')) : ?>
      <dt>Ends</dt>
      <dd><?php echo date("F d, Y", strtotime(get_field('end_date'))); ?></dd>
      <?php endif; ?>
      
      <dt>Location</dt>
      <dd><?php the_field('location'); ?></dd>

      <?php if (get_field('time')) : ?>
      <dt>Time</dt>
      <dd><?php the_field('time') ?></dd>
      <?php endif; ?>

      <?php if (get_field('cost')) : ?>
      <dt>Cost</dt>
      <dd><?php the_field('cost') ?></dd>
      <?php endif; ?>

    </dl>

    <?php the_content(); ?>

    <footer class="event-footer">

    <?php if (get_field('closed_event')) : ?>
    
      This event is open to current deshi only.
    
    <?php else : ?>
     
      This event is open to the public.

    <?php endif; ?>

    <?php if (get_field('must_register')) : ?>
      <br />
      <a href="#">Registration is required for this event</a>
    <?php endif; ?>

    </footer>

  </article>

  <?php endwhile; wp_reset_postdata(); ?>

</section>