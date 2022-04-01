# Shapey University : shapey-university
This is just a sandbox for learning traditional WordPress stuff.

## Experiment.php
  - URL:  http://shapey-university.local/WP-CONTENT/experiment.php
  - Path: "~\Local Sites\shapey-university\app\public\wp-content\experiment.php"

## Creating our own custom theme
  - Name: shapey-university-theme
  - Path: "~\Local Sites\shapey-university\app\public\wp-content\themes\shapey-university-theme"

## Functions
  - PHP Functions
    - array() - Creates an array
    - count() - Counts the number of elements in an array
  - WordPress Functions:
    - bloginfo('name') - Defined under wp-admin > Settings > Site Title
    - bloginfo('description') - Defined under wp-admin > Settings > Tagline
    - have_posts() - WordPress function that returns truthy while there are posts
    - the_post() - WordPress function that gets post data of the current post being iterated over.  By default it will iterate over the last 10 posts.
    - the_permalink() - WordPress function that gets the current post's link
    - the_title() - WordPress function that gets the current post's title
    - the_content() - WordPress function that gets the current post's content
    - get_header() - Opt-in to importing the global header for a page or post
    - get_footer() - Opt-in to importing the global footer for a page or post
    - wp_head() - Includes whatever WordPress, installed plug-ins and any file we ourselves specified under functions.php
    - add_action() - Allow us to run callback function at different hooks within WordPress execution.  This function is used within the context of "functions.php".
    - wp_enqueue_style() - Names and loads a stylesheet.
    - wp_enqueue_script() - Name and loads a JavaScript file.
    - add_theme_support() - Registers theme support for a given feature, e.g.: title-tag.
    - get_stylesheet_uri() - Returns style.css.
    - wp_footer() - Similar to "wp_head()", it also loads the admin menu bar if the user is logged in.
    - get_theme_file_uri() - Given a relative theme folder path, it generates a full URL that points to the current theme folder.

## Files within the theme folder
  - index.php - Default file used for all posts and pages
  - single.php - If it exist WordPress will use this file for individual posts
  - page.php - If it exist WordPress will use this file for individual pages
  - header.php - Allow us to define a global header.  This is an opt-in feature.
  - footer.php - Allow us to define a global footer.  This is an opt-in feature.
  - functions.php - Allow us to interface with the WordPress framework.

## University Static
  - Repo:
    - URL:  https://github.com/LearnWebCode/university-static
    - Path: ~\Local Sites\university-static
      - `PS ~\Local Sites> git clone https://github.com/LearnWebCode/university-static.git`
