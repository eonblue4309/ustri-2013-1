<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset='<?php bloginfo('charset') ?>'>

  <title>United States Tamiya Ryu Iaijutsu</title>

  <meta name="viewport" content="width=device-width">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
  <?php }?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">

  <?php /* Look into this....
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
  */ ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <link rel="shortcut icon" href="/favicon.ico">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<?php wp_head(); ?>

</head>

<body>

  <header class="site-header">

    <div class="masthead">

      <div class="main-column">

        <!-- <img src="/" /> -->

        <a href="/" class="logo">
          
          <div class="logo-group">
            
            <div class="logo-first-line">
              United States
            </div>

            <div class="logo-second-line">
              Tamiya Ryu Iaijutsu
            </div>
          
          </div>
        
        </a>

      </div>

    </div>

    <?php include("parts/navigation.php"); ?>

  </header>

  
