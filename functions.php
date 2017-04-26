<?php
require_once('inc/wp-bootstrap-navwalker.php'); // add bootstrap navigation helper from https://github.com/wp-bootstrap/wp-bootstrap-navwalker

//declare menu for bootstrap navigation helper - https://developer.wordpress.org/reference/functions/register_nav_menu/
register_nav_menus( array(
        'primary' => __( 'Menu1', 'Default Menu' ),
) );


?>