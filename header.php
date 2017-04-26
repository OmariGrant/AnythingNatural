<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- loads default wordpress stylesheet -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="<?php get_template_directory('assets/js/bootstrap'); ?>"></script>
</head>

<nav class="navbar navbar-default">
<div class="navbar-header">
      <a class="navbar-brand" href="<?php get_bloginfo( 'url' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a> <!-- Shows the site title and puts the sites url as the link -->
    </div>
<?php
 wp_nav_menu( array(
                'menu'              => 'menu1',
                'theme_location'    => 'primary',
                'depth'             => 0, 
                'container'         => 'div',
                'container_class'   => 'container-fluid',
                'container_id'      => 'navbar-container',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
?>
</nav>
