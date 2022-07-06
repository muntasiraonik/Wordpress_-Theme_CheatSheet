<?php 
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
?>

<!DOCTYPE html>

# Pulling the Language Attributes Set On Wordpress
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    # Pulling the CSS and JS Files that we declared in functions.php
    <?php 
    wp_head();
    ?>  
</head>

# These are not required but it helps to debug the code
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

# Pull the Website name

<?php 
echo get_bloginfo('name');

?>

# Menu Automate

<!-- Header Menu -->
<div class="navBar_menuWrap">
                    <ul class="navBar_menuItems">

                    <?php
              $defaults  = array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '%3$s',
                'depth'           => 0  
            );
            echo strip_tags(wp_nav_menu( $defaults ), '<a>');
            ?>
                      
                    </ul>
                </div>
<!-- Header Menu End -->

<!-- Menu Output Start -->
<div class="navBar_menuWrap">
                <ul class="navBar_menuItems">
                    <li> <a href="">Name</a></li>
                    <li> <a href="">Name 2</a></li>
                </ul>
</div>                    

<!-- Menu Output End -->

# We don't close body and Html tag inside header
# body closing will take place in all template
# html closing always take place in footer.php    
<!-- </body>
</html> -->

?>