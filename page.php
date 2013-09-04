<?php get_header(); ?>

<?php 

/*
  TODO: To enable a more RESTful feeling to the site (for example,
  /home/contact should link to a fully styled page)

    Change this file (default template) to just show the page's content.
    Change all top level pages to this code and change the template for those pages.
*/

?>

<?php

  $query_args = array(
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => get_the_ID()
  );

  $child_pages = new WP_Query($query_args);

  // for each page
  while ( $child_pages->have_posts() ) :

    $child_pages->the_post();

    $child_page_names[count($child_page_names)] = array (
      'id' => $post->post_name, 
      'title' => $post->post_title
    );

  endwhile;

  rewind_posts();
?>

<div class="page-wrap main-column">

  <?php the_post(); ?>

  <section class="content-module">

    <h1 class="child-page-title"><?php the_title(); ?></h1>

    <nav class="navigation inner-page-navigation page-content">

      <ul>
      <?php foreach ($child_page_names as $name) : ?>

        <li><a href="#<?php echo $name[id]; ?>"><?php echo $name[title]; ?></a></li>

      <?php endforeach; ?>
      </ul>

    </nav>

    <?php if (get_the_content()) : ?>

    <div class="page-content">
      
      <?php the_content(); ?>

    </div>

    <?php endif; ?>

  </section>

  <div class="child-content">

  <?php

    // for each page
    while ( $child_pages->have_posts() ) :

      $child_pages->the_post();

      $template_name = get_page_template_slug( $post->ID );
      $template_name = str_replace('.php', '', $template_name);
      get_template_part($template_name);

    endwhile;

    wp_reset_postdata(); // reset the query 

  ?>

  </div>

</div>

<?php get_footer(); ?>