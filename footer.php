<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!-- Footer Section -->
<footer class="footerSection " id="footer">
<!-- Html Codes -->

# Menu Automate

<!-- Footer Menu -->

<div class="navBar_menuWrap">
                        <ul class="navBar_menuItems">
                            <?php
                            $defaults  = array(
                                'menu' => 'footer',
                                'container' => '',
                                'theme_location' => 'footer',
                                'items_wrap' => '%3$s',
                                'depth'           => 0
                            );
                            echo strip_tags(wp_nav_menu($defaults), '<a>');
                            ?>
                        </ul>
                    </div>
        
<!-- Footer Menu End -->    
               
<!-- Menu Output Start -->
<div class="navBar_menuWrap">
                <ul class="navBar_menuItems">
                    <li> <a href="">Name</a></li>
                    <li> <a href="">Name 2</a></li>
                </ul>
</div>                    

<!-- Menu Output End -->                    

</footer>

<!-- Footer Section End -->
</main>

# Pulling the JS Files that we declared in functions.php
<?php
wp_footer();
?>

<!-- </body> -->

</html>
