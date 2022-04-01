<?php
  function university_files() {
    wp_enqueue_style('normalize_reset_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('google-roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); // DIsplays the social media icons
    $dependencies = array('jquery');
    $version = '0.0.1';
    $loadInFooter = true;
    wp_enqueue_script('university_main_script', get_theme_file_uri('/build/index.js'), $dependencies, $version, $loadInFooter);
  }

  function university_features() {
    add_theme_support('title-tag');
  }

  add_action('wp_enqueue_scripts', 'university_files');
  add_action('after_setup_theme', 'university_features');
?>
