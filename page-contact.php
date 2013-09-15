<?php
/*
  Template Name: Contact
*/
?>

<section id="<?php echo $post->post_name; ?>" class="contact-page content-module">

  <h1 class="child-page-title"><?php the_title(); ?></h1>
  
  <div class="page-content">
  
    <?php the_content(); ?>

    <div id="wufoo-z7x4m1">
      Fill out my <a href="http://ustamiyaryu.wufoo.com/forms/z7x4m1">online form</a>.
    </div>
    <script type="text/javascript">
      var z7x4m1;(function(d, t) {
      var s = d.createElement(t), options = {
      'userName':'ustamiyaryu', 
      'formHash':'z7x4m1', 
      'autoResize':true,
      'height':'908',
      'async':true,
      'header':'show'};
      s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
      s.onload = s.onreadystatechange = function() {
      var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
      try { z7x4m1 = new WufooForm();z7x4m1.initialize(options);z7x4m1.display(); } catch (e) {}};
      var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
      })(document, 'script');
    </script>

    <?php /*

      Name
      Email
      Select
        Inquiry
        Absence
        Event Registration

      if (inquiry)
        Select
          General
          Michigan Hombu Dojo
          Southeast Michigan Branch Dojo
      if (event)
        Select
          Event 1

    */?>

  </div>

</section>