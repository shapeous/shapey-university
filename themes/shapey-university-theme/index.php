<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('name') ?></title>
  <!--link rel="stylesheet" href="css/styles.css?v=1.0"-->
</head>

<body>
  <?php get_header() ?>
  <h1><?php bloginfo('name') ?></h1>
  <h2><?php bloginfo('description') ?></h2>
  <?php
    while(have_posts()) {
      the_post(); ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_content(); ?></p>
      <hr>
    <?php }
    get_footer();
  ?>
  <!--script src="js/scripts.js"></script-->
</body>
</html>
